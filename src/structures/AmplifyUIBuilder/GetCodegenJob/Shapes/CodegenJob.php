<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $appId
 * @property string $environmentName
 * @property CodegenJobRenderConfig $renderConfig
 * @property CodegenJobGenericDataSchema $genericDataSchema
 * @property bool $autoGenerateForms
 * @property CodegenFeatureFlags $features
 * @property 'in_progress'|'failed'|'succeeded' $status
 * @property string $statusMessage
 * @property CodegenJobAsset $asset
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property list<CodegenDependency> $dependencies
 */
class CodegenJob extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     appId: string,
     *     environmentName: string,
     *     renderConfig?: CodegenJobRenderConfig,
     *     genericDataSchema?: CodegenJobGenericDataSchema,
     *     autoGenerateForms?: bool,
     *     features?: CodegenFeatureFlags,
     *     status?: 'in_progress'|'failed'|'succeeded',
     *     statusMessage?: string,
     *     asset?: CodegenJobAsset,
     *     tags?: array<string, string>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     dependencies?: list<CodegenDependency>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
