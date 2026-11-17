<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataKey
 */
class TextSearchConfigurationKey extends Shape
{
    /**
     * @param array{metadataKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
