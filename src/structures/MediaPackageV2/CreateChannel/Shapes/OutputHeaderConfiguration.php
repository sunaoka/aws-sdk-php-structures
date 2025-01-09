<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $PublishMQCS
 */
class OutputHeaderConfiguration extends Shape
{
    /**
     * @param array{PublishMQCS?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
