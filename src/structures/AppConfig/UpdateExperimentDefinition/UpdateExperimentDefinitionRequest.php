<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property list<Shapes\TreatmentInput>|null $Treatments
 * @property Shapes\TreatmentInput|null $Control
 * @property string|null $Hypothesis
 * @property string|null $AudienceRule
 * @property string|null $AudienceDescription
 * @property string|null $LaunchCriteria
 */
class UpdateExperimentDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     Treatments?: list<Shapes\TreatmentInput>|null,
     *     Control?: Shapes\TreatmentInput|null,
     *     Hypothesis?: string|null,
     *     AudienceRule?: string|null,
     *     AudienceDescription?: string|null,
     *     LaunchCriteria?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
