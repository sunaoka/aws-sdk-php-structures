<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFeaturedResultsSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Title
 * @property string $URI
 */
class FeaturedDocumentWithMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Title?: string,
     *     URI?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
