<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributeDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListCalculatedAttributeDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
