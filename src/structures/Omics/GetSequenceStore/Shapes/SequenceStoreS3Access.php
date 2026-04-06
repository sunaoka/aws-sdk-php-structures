<?php

namespace Sunaoka\Aws\Structures\Omics\GetSequenceStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Uri
 * @property string|null $s3AccessPointArn
 */
class SequenceStoreS3Access extends Shape
{
    /**
     * @param array{
     *     s3Uri?: string|null,
     *     s3AccessPointArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
