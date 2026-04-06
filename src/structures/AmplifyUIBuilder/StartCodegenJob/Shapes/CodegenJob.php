<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $appId
 * @property string $environmentName
 * @property CodegenJobRenderConfig|null $renderConfig
 * @property CodegenJobGenericDataSchema|null $genericDataSchema
 * @property bool|null $autoGenerateForms
 * @property CodegenFeatureFlags|null $features
 * @property 'in_progress'|'failed'|'succeeded'|null $status
 * @property string|null $statusMessage
 * @property CodegenJobAsset|null $asset
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property list<CodegenDependency>|null $dependencies
 */
class CodegenJob extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     appId: string,
     *     environmentName: string,
     *     renderConfig?: CodegenJobRenderConfig|null,
     *     genericDataSchema?: CodegenJobGenericDataSchema|null,
     *     autoGenerateForms?: bool|null,
     *     features?: CodegenFeatureFlags|null,
     *     status?: 'in_progress'|'failed'|'succeeded'|null,
     *     statusMessage?: string|null,
     *     asset?: CodegenJobAsset|null,
     *     tags?: array<string, string>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     dependencies?: list<CodegenDependency>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
