<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\UpdateKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 */
class DeleteKeyRequestListItem extends Shape
{
    /**
     * @param array{Key: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
