<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobDefinitionName
 * @property string $jobDefinitionArn
 * @property int $revision
 * @property string|null $status
 * @property string $type
 * @property int|null $schedulingPriority
 * @property array<string, string>|null $parameters
 * @property RetryStrategy|null $retryStrategy
 * @property ContainerProperties|null $containerProperties
 * @property JobTimeout|null $timeout
 * @property NodeProperties|null $nodeProperties
 * @property array<string, string>|null $tags
 * @property bool|null $propagateTags
 * @property list<'EC2'|'FARGATE'>|null $platformCapabilities
 * @property EcsProperties|null $ecsProperties
 * @property EksProperties|null $eksProperties
 * @property 'ECS'|'EKS'|null $containerOrchestrationType
 * @property ConsumableResourceProperties|null $consumableResourceProperties
 */
class JobDefinition extends Shape
{
    /**
     * @param array{
     *     jobDefinitionName: string,
     *     jobDefinitionArn: string,
     *     revision: int,
     *     status?: string|null,
     *     type: string,
     *     schedulingPriority?: int|null,
     *     parameters?: array<string, string>|null,
     *     retryStrategy?: RetryStrategy|null,
     *     containerProperties?: ContainerProperties|null,
     *     timeout?: JobTimeout|null,
     *     nodeProperties?: NodeProperties|null,
     *     tags?: array<string, string>|null,
     *     propagateTags?: bool|null,
     *     platformCapabilities?: list<'EC2'|'FARGATE'>|null,
     *     ecsProperties?: EcsProperties|null,
     *     eksProperties?: EksProperties|null,
     *     containerOrchestrationType?: 'ECS'|'EKS'|null,
     *     consumableResourceProperties?: ConsumableResourceProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
