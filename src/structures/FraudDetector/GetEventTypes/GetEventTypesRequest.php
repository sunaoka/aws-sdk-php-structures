<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<5, 10> $maxResults
 */
class GetEventTypesRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     nextToken?: string,
     *     maxResults?: int<5, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
