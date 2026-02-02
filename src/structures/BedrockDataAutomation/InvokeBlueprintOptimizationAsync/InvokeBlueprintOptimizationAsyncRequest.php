<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeBlueprintOptimizationAsync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BlueprintOptimizationObject $blueprint
 * @property list<Shapes\BlueprintOptimizationSample> $samples
 * @property Shapes\BlueprintOptimizationOutputConfiguration $outputConfiguration
 * @property string $dataAutomationProfileArn
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class InvokeBlueprintOptimizationAsyncRequest extends Request
{
    /**
     * @param array{
     *     blueprint: Shapes\BlueprintOptimizationObject,
     *     samples: list<Shapes\BlueprintOptimizationSample>,
     *     outputConfiguration: Shapes\BlueprintOptimizationOutputConfiguration,
     *     dataAutomationProfileArn: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
