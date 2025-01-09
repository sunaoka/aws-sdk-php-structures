<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDetectorModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
