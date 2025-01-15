<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListElements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $nextToken
 * @property int<500, 5000>|null $maxResults
 */
class GetListElementsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string|null,
     *     maxResults?: int<500, 5000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
