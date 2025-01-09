<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodegenJobRenderConfig $renderConfig
 * @property CodegenJobGenericDataSchema $genericDataSchema
 * @property bool $autoGenerateForms
 * @property CodegenFeatureFlags $features
 * @property array<string, string> $tags
 */
class StartCodegenJobData extends Shape
{
    /**
     * @param array{
     *     renderConfig: CodegenJobRenderConfig,
     *     genericDataSchema?: CodegenJobGenericDataSchema,
     *     autoGenerateForms?: bool,
     *     features?: CodegenFeatureFlags,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
