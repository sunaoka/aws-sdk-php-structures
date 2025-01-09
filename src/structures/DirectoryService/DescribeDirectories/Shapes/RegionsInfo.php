<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryRegion
 * @property list<string> $AdditionalRegions
 */
class RegionsInfo extends Shape
{
    /**
     * @param array{
     *     PrimaryRegion?: string,
     *     AdditionalRegions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
