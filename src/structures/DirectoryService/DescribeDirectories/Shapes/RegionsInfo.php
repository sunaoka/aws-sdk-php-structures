<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimaryRegion
 * @property list<string>|null $AdditionalRegions
 */
class RegionsInfo extends Shape
{
    /**
     * @param array{
     *     PrimaryRegion?: string|null,
     *     AdditionalRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
