<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string|null $stateName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListDetectorsRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     stateName?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
