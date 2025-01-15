<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property list<double> $Position
 * @property int<1, 50>|null $MaxResults
 * @property string|null $Language
 * @property string|null $Key
 */
class SearchPlaceIndexForPositionRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Position: list<double>,
     *     MaxResults?: int<1, 50>|null,
     *     Language?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
