<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $nonFilterableMetadataKeys
 */
class MetadataConfiguration extends Shape
{
    /**
     * @param array{nonFilterableMetadataKeys: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
