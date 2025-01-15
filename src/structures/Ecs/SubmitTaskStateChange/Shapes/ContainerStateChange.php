<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitTaskStateChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerName
 * @property string|null $imageDigest
 * @property string|null $runtimeId
 * @property int|null $exitCode
 * @property list<NetworkBinding>|null $networkBindings
 * @property string|null $reason
 * @property string|null $status
 */
class ContainerStateChange extends Shape
{
    /**
     * @param array{
     *     containerName?: string|null,
     *     imageDigest?: string|null,
     *     runtimeId?: string|null,
     *     exitCode?: int|null,
     *     networkBindings?: list<NetworkBinding>|null,
     *     reason?: string|null,
     *     status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
