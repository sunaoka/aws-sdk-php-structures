<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartMedicalCodingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MALE'|'FEMALE'|'NON_BINARY'|'UNKNOWN'|null $sex
 * @property 'NEW'|'ESTABLISHED'|null $status
 * @property string|null $dateOfBirth
 * @property string|null $insurance
 */
class MedicalCodesPatientContext extends Shape
{
    /**
     * @param array{
     *     sex?: 'MALE'|'FEMALE'|'NON_BINARY'|'UNKNOWN'|null,
     *     status?: 'NEW'|'ESTABLISHED'|null,
     *     dateOfBirth?: string|null,
     *     insurance?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
