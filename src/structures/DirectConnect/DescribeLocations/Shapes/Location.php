<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $locationCode
 * @property string|null $locationName
 * @property string|null $region
 * @property list<string>|null $availablePortSpeeds
 * @property list<string>|null $availableProviders
 * @property list<string>|null $availableMacSecPortSpeeds
 */
class Location extends Shape
{
    /**
     * @param array{
     *     locationCode?: string|null,
     *     locationName?: string|null,
     *     region?: string|null,
     *     availablePortSpeeds?: list<string>|null,
     *     availableProviders?: list<string>|null,
     *     availableMacSecPortSpeeds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
