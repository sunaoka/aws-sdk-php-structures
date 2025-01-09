<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitTaskStateChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property string $imageDigest
 * @property string $runtimeId
 * @property int $exitCode
 * @property list<NetworkBinding> $networkBindings
 * @property string $reason
 * @property string $status
 */
class ContainerStateChange extends Shape
{
    /**
     * @param array{
     *     containerName?: string,
     *     imageDigest?: string,
     *     runtimeId?: string,
     *     exitCode?: int,
     *     networkBindings?: list<NetworkBinding>,
     *     reason?: string,
     *     status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
