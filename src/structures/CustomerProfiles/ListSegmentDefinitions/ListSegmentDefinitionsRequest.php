<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSegmentDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
