<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $locationCode
 * @property string $locationName
 * @property string $region
 * @property list<string> $availablePortSpeeds
 * @property list<string> $availableProviders
 * @property list<string> $availableMacSecPortSpeeds
 */
class Location extends Shape
{
    /**
     * @param array{
     *     locationCode?: string,
     *     locationName?: string,
     *     region?: string,
     *     availablePortSpeeds?: list<string>,
     *     availableProviders?: list<string>,
     *     availableMacSecPortSpeeds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
