<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property bool $Enabled
 * @property string|null $Prefix
 */
class S3 extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Enabled: bool,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
