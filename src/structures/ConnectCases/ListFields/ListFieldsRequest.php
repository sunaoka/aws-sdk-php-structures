<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListFieldsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
