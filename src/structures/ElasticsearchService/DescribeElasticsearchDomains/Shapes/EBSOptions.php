<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EBSEnabled
 * @property 'standard'|'gp2'|'io1'|'gp3'|null $VolumeType
 * @property int|null $VolumeSize
 * @property int|null $Iops
 * @property int|null $Throughput
 */
class EBSOptions extends Shape
{
    /**
     * @param array{
     *     EBSEnabled?: bool|null,
     *     VolumeType?: 'standard'|'gp2'|'io1'|'gp3'|null,
     *     VolumeSize?: int|null,
     *     Iops?: int|null,
     *     Throughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
