<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelInvocationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $roleArn
 * @property string|null $clientRequestToken
 * @property string $modelId
 * @property Shapes\ModelInvocationJobInputDataConfig $inputDataConfig
 * @property Shapes\ModelInvocationJobOutputDataConfig $outputDataConfig
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property int<24, 168>|null $timeoutDurationInHours
 * @property list<Shapes\Tag>|null $tags
 */
class CreateModelInvocationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     roleArn: string,
     *     clientRequestToken?: string|null,
     *     modelId: string,
     *     inputDataConfig: Shapes\ModelInvocationJobInputDataConfig,
     *     outputDataConfig: Shapes\ModelInvocationJobOutputDataConfig,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     timeoutDurationInHours?: int<24, 168>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
