<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateSequenceStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Uri
 * @property string|null $s3AccessPointArn
 * @property string|null $accessLogLocation
 */
class SequenceStoreS3Access extends Shape
{
    /**
     * @param array{
     *     s3Uri?: string|null,
     *     s3AccessPointArn?: string|null,
     *     accessLogLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
