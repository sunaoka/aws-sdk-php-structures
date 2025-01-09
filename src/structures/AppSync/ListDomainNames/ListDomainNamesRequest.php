<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDomainNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<0, 25> $maxResults
 */
class ListDomainNamesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<0, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
