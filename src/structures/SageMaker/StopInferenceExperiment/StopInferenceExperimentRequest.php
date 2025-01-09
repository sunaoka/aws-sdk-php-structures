<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, 'Retain'|'Remove'|'Promote'> $ModelVariantActions
 * @property list<Shapes\ModelVariantConfig> $DesiredModelVariants
 * @property 'Completed'|'Cancelled' $DesiredState
 * @property string $Reason
 */
class StopInferenceExperimentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ModelVariantActions: array<string, 'Retain'|'Remove'|'Promote'>,
     *     DesiredModelVariants?: list<Shapes\ModelVariantConfig>,
     *     DesiredState?: 'Completed'|'Cancelled',
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
