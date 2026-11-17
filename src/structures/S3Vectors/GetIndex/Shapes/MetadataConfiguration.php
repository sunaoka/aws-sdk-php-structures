<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $nonFilterableMetadataKeys
 * @property list<TextSearchConfiguration>|null $textSearchConfigurations
 */
class MetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     nonFilterableMetadataKeys?: list<string>|null,
     *     textSearchConfigurations?: list<TextSearchConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
