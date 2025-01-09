<?php

namespace Sunaoka\Aws\Structures\Omics\GetSequenceStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string $s3AccessPointArn
 * @property string $accessLogLocation
 */
class SequenceStoreS3Access extends Shape
{
    /**
     * @param array{
     *     s3Uri?: string,
     *     s3AccessPointArn?: string,
     *     accessLogLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
