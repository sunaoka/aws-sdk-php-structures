<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EBSEnabled
 * @property 'standard'|'gp2'|'io1'|'gp3' $VolumeType
 * @property int $VolumeSize
 * @property int $Iops
 * @property int $Throughput
 */
class EBSOptions extends Shape
{
    /**
     * @param array{
     *     EBSEnabled?: bool,
     *     VolumeType?: 'standard'|'gp2'|'io1'|'gp3',
     *     VolumeSize?: int,
     *     Iops?: int,
     *     Throughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
