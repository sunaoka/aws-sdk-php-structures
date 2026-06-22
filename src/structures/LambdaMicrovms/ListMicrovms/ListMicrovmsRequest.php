<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $imageIdentifier
 * @property string|null $imageVersion
 */
class ListMicrovmsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     imageIdentifier?: string|null,
     *     imageVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
