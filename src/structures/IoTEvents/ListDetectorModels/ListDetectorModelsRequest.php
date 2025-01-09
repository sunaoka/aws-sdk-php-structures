<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListDetectorModelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
