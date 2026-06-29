<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopExperimentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Hypothesis
 * @property string|null $ConfigurationProfileId
 * @property string|null $EnvironmentId
 * @property string|null $FlagKey
 * @property string|null $AudienceRule
 * @property string|null $AudienceDescription
 * @property string|null $LaunchCriteria
 * @property list<Treatment>|null $Treatments
 * @property Treatment|null $Control
 */
class ExperimentDefinitionSnapshot extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Hypothesis?: string|null,
     *     ConfigurationProfileId?: string|null,
     *     EnvironmentId?: string|null,
     *     FlagKey?: string|null,
     *     AudienceRule?: string|null,
     *     AudienceDescription?: string|null,
     *     LaunchCriteria?: string|null,
     *     Treatments?: list<Treatment>|null,
     *     Control?: Treatment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
