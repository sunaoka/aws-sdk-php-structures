<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodegenJobRenderConfig $renderConfig
 * @property CodegenJobGenericDataSchema|null $genericDataSchema
 * @property bool|null $autoGenerateForms
 * @property CodegenFeatureFlags|null $features
 * @property array<string, string>|null $tags
 */
class StartCodegenJobData extends Shape
{
    /**
     * @param array{
     *     renderConfig: CodegenJobRenderConfig,
     *     genericDataSchema?: CodegenJobGenericDataSchema|null,
     *     autoGenerateForms?: bool|null,
     *     features?: CodegenFeatureFlags|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
