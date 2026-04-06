<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostName
 * @property string $keyName
 * @property 'i4i.metal' $instanceType
 * @property string|null $placementGroupId
 * @property string|null $dedicatedHostId
 */
class HostInfoForCreate extends Shape
{
    /**
     * @param array{
     *     hostName: string,
     *     keyName: string,
     *     instanceType: 'i4i.metal',
     *     placementGroupId?: string|null,
     *     dedicatedHostId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
