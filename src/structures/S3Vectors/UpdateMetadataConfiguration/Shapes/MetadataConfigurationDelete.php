<?php

namespace Sunaoka\Aws\Structures\S3Vectors\UpdateMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextSearchConfigurationKey>|null $textSearchConfigurations
 */
class MetadataConfigurationDelete extends Shape
{
    /**
     * @param array{textSearchConfigurations?: list<TextSearchConfigurationKey>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
