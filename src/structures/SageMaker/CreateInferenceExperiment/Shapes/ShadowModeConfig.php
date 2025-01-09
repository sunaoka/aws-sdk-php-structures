<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceModelVariantName
 * @property list<ShadowModelVariantConfig> $ShadowModelVariants
 */
class ShadowModeConfig extends Shape
{
    /**
     * @param array{
     *     SourceModelVariantName: string,
     *     ShadowModelVariants: list<ShadowModelVariantConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
