<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationHdfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Hostname
 * @property int $Port
 */
class HdfsNameNode extends Shape
{
    /**
     * @param array{
     *     Hostname: string,
     *     Port: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
