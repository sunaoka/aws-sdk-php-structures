<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAccountAuditConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class AuditCheckConfiguration extends Shape
{
    /**
     * @param array{enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
