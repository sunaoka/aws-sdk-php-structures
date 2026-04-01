<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $daemonRevisionArn
 * @property string|null $clusterArn
 * @property string|null $daemonArn
 * @property string|null $daemonTaskDefinitionArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property list<DaemonContainerImage>|null $containerImages
 * @property 'DAEMON'|'NONE'|null $propagateTags
 * @property bool|null $enableECSManagedTags
 * @property bool|null $enableExecuteCommand
 */
class DaemonRevision extends Shape
{
    /**
     * @param array{
     *     daemonRevisionArn?: string|null,
     *     clusterArn?: string|null,
     *     daemonArn?: string|null,
     *     daemonTaskDefinitionArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     containerImages?: list<DaemonContainerImage>|null,
     *     propagateTags?: 'DAEMON'|'NONE'|null,
     *     enableECSManagedTags?: bool|null,
     *     enableExecuteCommand?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
