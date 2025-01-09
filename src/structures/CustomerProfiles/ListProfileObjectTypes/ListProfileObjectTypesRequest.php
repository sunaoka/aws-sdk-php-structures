<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListProfileObjectTypesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
