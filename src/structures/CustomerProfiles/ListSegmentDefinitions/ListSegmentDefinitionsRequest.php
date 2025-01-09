<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class ListSegmentDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
