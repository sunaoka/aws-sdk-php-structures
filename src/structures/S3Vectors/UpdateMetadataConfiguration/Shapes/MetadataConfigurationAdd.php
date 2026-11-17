<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextSearchConfiguration>|null $textSearchConfigurations
 */
class MetadataConfigurationAdd extends Shape
{
    /**
     * @param array{textSearchConfigurations?: list<TextSearchConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
