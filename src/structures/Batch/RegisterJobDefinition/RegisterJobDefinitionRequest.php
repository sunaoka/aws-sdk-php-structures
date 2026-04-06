<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobDefinitionName
 * @property 'container'|'multinode' $type
 * @property array<string, string>|null $parameters
 * @property int|null $schedulingPriority
 * @property Shapes\ContainerProperties|null $containerProperties
 * @property Shapes\NodeProperties|null $nodeProperties
 * @property Shapes\RetryStrategy|null $retryStrategy
 * @property bool|null $propagateTags
 * @property Shapes\JobTimeout|null $timeout
 * @property array<string, string>|null $tags
 * @property list<'EC2'|'FARGATE'>|null $platformCapabilities
 * @property Shapes\EksProperties|null $eksProperties
 * @property Shapes\EcsProperties|null $ecsProperties
 */
class RegisterJobDefinitionRequest extends Request
{
    /**
     * @param array{
     *     jobDefinitionName: string,
     *     type: 'container'|'multinode',
     *     parameters?: array<string, string>|null,
     *     schedulingPriority?: int|null,
     *     containerProperties?: Shapes\ContainerProperties|null,
     *     nodeProperties?: Shapes\NodeProperties|null,
     *     retryStrategy?: Shapes\RetryStrategy|null,
     *     propagateTags?: bool|null,
     *     timeout?: Shapes\JobTimeout|null,
     *     tags?: array<string, string>|null,
     *     platformCapabilities?: list<'EC2'|'FARGATE'>|null,
     *     eksProperties?: Shapes\EksProperties|null,
     *     ecsProperties?: Shapes\EcsProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
