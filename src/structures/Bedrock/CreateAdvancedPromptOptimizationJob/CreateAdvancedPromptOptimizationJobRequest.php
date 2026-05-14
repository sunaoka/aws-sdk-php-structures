<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAdvancedPromptOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string|null $jobDescription
 * @property string|null $clientToken
 * @property Shapes\AdvancedPromptOptimizationInputConfig $inputConfig
 * @property Shapes\AdvancedPromptOptimizationOutputConfig $outputConfig
 * @property string|null $encryptionKeyArn
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\ModelConfiguration> $modelConfigurations
 */
class CreateAdvancedPromptOptimizationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobDescription?: string|null,
     *     clientToken?: string|null,
     *     inputConfig: Shapes\AdvancedPromptOptimizationInputConfig,
     *     outputConfig: Shapes\AdvancedPromptOptimizationOutputConfig,
     *     encryptionKeyArn?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     modelConfigurations: list<Shapes\ModelConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
