<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KvsARN
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     KvsARN: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
