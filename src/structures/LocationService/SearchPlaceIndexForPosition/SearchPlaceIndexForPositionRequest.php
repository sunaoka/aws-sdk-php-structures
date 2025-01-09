<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property list<double> $Position
 * @property int<1, 50> $MaxResults
 * @property string $Language
 * @property string $Key
 */
class SearchPlaceIndexForPositionRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     Position: list<double>,
     *     MaxResults?: int<1, 50>,
     *     Language?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
