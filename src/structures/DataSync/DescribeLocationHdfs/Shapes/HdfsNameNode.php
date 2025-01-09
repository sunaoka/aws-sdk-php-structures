<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationHdfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Hostname
 * @property int<1, 65536> $Port
 */
class HdfsNameNode extends Shape
{
    /**
     * @param array{
     *     Hostname: string,
     *     Port: int<1, 65536>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
