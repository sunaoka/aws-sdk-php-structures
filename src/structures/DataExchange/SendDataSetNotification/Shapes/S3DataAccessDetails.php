<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $KeyPrefixes
 * @property list<string> $Keys
 */
class S3DataAccessDetails extends Shape
{
    /**
     * @param array{
     *     KeyPrefixes?: list<string>,
     *     Keys?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
