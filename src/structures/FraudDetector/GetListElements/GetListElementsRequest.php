<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListElements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<500, 5000> $maxResults
 */
class GetListElementsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string,
     *     maxResults?: int<500, 5000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
