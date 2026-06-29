<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Hypothesis
 * @property 'ACTIVE'|'IDLE'|'ARCHIVED'|null $Status
 * @property string|null $ConfigurationProfileId
 * @property string|null $EnvironmentId
 * @property string|null $FlagKey
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class ExperimentDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Hypothesis?: string|null,
     *     Status?: 'ACTIVE'|'IDLE'|'ARCHIVED'|null,
     *     ConfigurationProfileId?: string|null,
     *     EnvironmentId?: string|null,
     *     FlagKey?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
