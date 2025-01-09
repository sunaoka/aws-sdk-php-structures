<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property bool $ExcludeBootVolume
 * @property list<string> $ExcludeDataVolumeIds
 */
class InstanceSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ExcludeBootVolume?: bool,
     *     ExcludeDataVolumeIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
