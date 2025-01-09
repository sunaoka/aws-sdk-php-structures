<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property list<'Active'|'Inactive'> $status
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     status?: list<'Active'|'Inactive'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
