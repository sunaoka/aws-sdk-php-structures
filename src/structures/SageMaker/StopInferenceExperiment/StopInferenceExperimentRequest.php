<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, 'Retain'|'Remove'|'Promote'> $ModelVariantActions
 * @property list<Shapes\ModelVariantConfig>|null $DesiredModelVariants
 * @property 'Completed'|'Cancelled'|null $DesiredState
 * @property string|null $Reason
 */
class StopInferenceExperimentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ModelVariantActions: array<string, 'Retain'|'Remove'|'Promote'>,
     *     DesiredModelVariants?: list<Shapes\ModelVariantConfig>|null,
     *     DesiredState?: 'Completed'|'Cancelled'|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
