<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobDefinitionName
 * @property 'container'|'multinode' $type
 * @property array<string, string> $parameters
 * @property int $schedulingPriority
 * @property Shapes\ContainerProperties $containerProperties
 * @property Shapes\NodeProperties $nodeProperties
 * @property Shapes\RetryStrategy $retryStrategy
 * @property bool $propagateTags
 * @property Shapes\JobTimeout $timeout
 * @property array<string, string> $tags
 * @property list<'EC2'|'FARGATE'> $platformCapabilities
 * @property Shapes\EksProperties $eksProperties
 * @property Shapes\EcsProperties $ecsProperties
 */
class RegisterJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     jobDefinitionName: string,
     *     type: 'container'|'multinode',
     *     parameters?: array<string, string>,
     *     schedulingPriority?: int,
     *     containerProperties?: Shapes\ContainerProperties,
     *     nodeProperties?: Shapes\NodeProperties,
     *     retryStrategy?: Shapes\RetryStrategy,
     *     propagateTags?: bool,
     *     timeout?: Shapes\JobTimeout,
     *     tags?: array<string, string>,
     *     platformCapabilities?: list<'EC2'|'FARGATE'>,
     *     eksProperties?: Shapes\EksProperties,
     *     ecsProperties?: Shapes\EcsProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
