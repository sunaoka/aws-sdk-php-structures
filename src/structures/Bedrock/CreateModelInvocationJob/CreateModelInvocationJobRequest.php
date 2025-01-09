<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelInvocationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $roleArn
 * @property string $clientRequestToken
 * @property string $modelId
 * @property Shapes\ModelInvocationJobInputDataConfig $inputDataConfig
 * @property Shapes\ModelInvocationJobOutputDataConfig $outputDataConfig
 * @property Shapes\VpcConfig $vpcConfig
 * @property int $timeoutDurationInHours
 * @property list<Shapes\Tag> $tags
 */
class CreateModelInvocationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     roleArn: string,
     *     clientRequestToken?: string,
     *     modelId: string,
     *     inputDataConfig: Shapes\ModelInvocationJobInputDataConfig,
     *     outputDataConfig: Shapes\ModelInvocationJobOutputDataConfig,
     *     vpcConfig?: Shapes\VpcConfig,
     *     timeoutDurationInHours?: int,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
