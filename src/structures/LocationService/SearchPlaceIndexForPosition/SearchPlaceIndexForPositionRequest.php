<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string|null $Key
 * @property string|null $Language
 * @property int<1, 50>|null $MaxResults
 * @property list<double> $Position
 */
class SearchPlaceIndexForPositionRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Key?: string|null,
     *     Language?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     Position: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
