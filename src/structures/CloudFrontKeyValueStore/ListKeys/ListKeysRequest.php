<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KvsARN
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     KvsARN: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
