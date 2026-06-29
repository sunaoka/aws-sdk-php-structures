<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExperimentDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $Name
 * @property string $ConfigurationProfileIdentifier
 * @property string $EnvironmentIdentifier
 * @property string $FlagKey
 * @property list<Shapes\TreatmentInput> $Treatments
 * @property Shapes\TreatmentInput $Control
 * @property string $AudienceRule
 * @property string|null $Hypothesis
 * @property string|null $AudienceDescription
 * @property string|null $LaunchCriteria
 * @property array<string, string>|null $Tags
 */
class CreateExperimentDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     Name: string,
     *     ConfigurationProfileIdentifier: string,
     *     EnvironmentIdentifier: string,
     *     FlagKey: string,
     *     Treatments: list<Shapes\TreatmentInput>,
     *     Control: Shapes\TreatmentInput,
     *     AudienceRule: string,
     *     Hypothesis?: string|null,
     *     AudienceDescription?: string|null,
     *     LaunchCriteria?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
