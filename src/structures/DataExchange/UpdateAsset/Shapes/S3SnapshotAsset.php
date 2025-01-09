<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Size
 */
class S3SnapshotAsset extends Shape
{
    /**
     * @param array{Size: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
