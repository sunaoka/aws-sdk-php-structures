<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MetadataColumns
 */
class MetadataConfig extends Shape
{
    /**
     * @param array{MetadataColumns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
