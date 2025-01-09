<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string $stateName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDetectorsRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     stateName?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
