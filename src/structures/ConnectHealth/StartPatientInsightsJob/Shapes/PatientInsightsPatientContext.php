<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $patientId
 * @property string|null $dateOfBirth
 * @property 'HE_HIM'|'SHE_HER'|'THEY_THEM'|null $pronouns
 */
class PatientInsightsPatientContext extends Shape
{
    /**
     * @param array{
     *     patientId: string,
     *     dateOfBirth?: string|null,
     *     pronouns?: 'HE_HIM'|'SHE_HER'|'THEY_THEM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
