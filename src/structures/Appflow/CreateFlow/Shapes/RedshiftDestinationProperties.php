<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 * @property string $intermediateBucketName
 * @property string $bucketPrefix
 * @property ErrorHandlingConfig $errorHandlingConfig
 */
class RedshiftDestinationProperties extends Shape
{
    /**
     * @param array{
     *     object: string,
     *     intermediateBucketName: string,
     *     bucketPrefix?: string,
     *     errorHandlingConfig?: ErrorHandlingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
