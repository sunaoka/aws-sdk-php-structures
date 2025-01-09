<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{bucketName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
