<?php

namespace App\Http\Services;

use App\Repositories\Employee\EmployeeRepositoryInterface;

class EmployeeService
{
    protected EmployeeRepositoryInterface $employeeRepositoryInterface;

    public function __construct(EmployeeRepositoryInterface $employeeRepositoryInterface)
    {
        $this->employeeRepositoryInterface = $employeeRepositoryInterface;
    }

    public function create(array $data)
    {
        return $this->employeeRepositoryInterface->create($data);
    }

    public function update(array $data, int $id)
    {
        return $this->employeeRepositoryInterface->update($data, $id);
    }

    public function delete(int $id)
    {
        return $this->employeeRepositoryInterface->delete($id);
    }

    public function getById(int $id)
    {
        return $this->employeeRepositoryInterface->getById($id);
    }

    public function getAll()
    {
        return $this->employeeRepositoryInterface->getAll();
    }
}
