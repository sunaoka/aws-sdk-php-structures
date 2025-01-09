<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property bool $Enabled
 * @property string $Prefix
 */
class S3 extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Enabled: bool,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
