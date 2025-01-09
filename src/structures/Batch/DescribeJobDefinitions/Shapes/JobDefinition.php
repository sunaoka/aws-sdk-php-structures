<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobDefinitionName
 * @property string $jobDefinitionArn
 * @property int $revision
 * @property string $status
 * @property string $type
 * @property int $schedulingPriority
 * @property array<string, string> $parameters
 * @property RetryStrategy $retryStrategy
 * @property ContainerProperties $containerProperties
 * @property JobTimeout $timeout
 * @property NodeProperties $nodeProperties
 * @property array<string, string> $tags
 * @property bool $propagateTags
 * @property list<'EC2'|'FARGATE'> $platformCapabilities
 * @property EcsProperties $ecsProperties
 * @property EksProperties $eksProperties
 * @property 'ECS'|'EKS' $containerOrchestrationType
 */
class JobDefinition extends Shape
{
    /**
     * @param array{
     *     jobDefinitionName: string,
     *     jobDefinitionArn: string,
     *     revision: int,
     *     status?: string,
     *     type: string,
     *     schedulingPriority?: int,
     *     parameters?: array<string, string>,
     *     retryStrategy?: RetryStrategy,
     *     containerProperties?: ContainerProperties,
     *     timeout?: JobTimeout,
     *     nodeProperties?: NodeProperties,
     *     tags?: array<string, string>,
     *     propagateTags?: bool,
     *     platformCapabilities?: list<'EC2'|'FARGATE'>,
     *     ecsProperties?: EcsProperties,
     *     eksProperties?: EksProperties,
     *     containerOrchestrationType?: 'ECS'|'EKS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
