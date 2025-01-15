<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property bool|null $ExcludeBootVolume
 * @property list<string>|null $ExcludeDataVolumeIds
 */
class InstanceSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ExcludeBootVolume?: bool|null,
     *     ExcludeDataVolumeIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
