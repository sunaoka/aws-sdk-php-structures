<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListDetectorModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     detectorModelName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
