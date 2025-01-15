<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFeaturedResultsSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Title
 * @property string|null $URI
 */
class FeaturedDocumentWithMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Title?: string|null,
     *     URI?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
