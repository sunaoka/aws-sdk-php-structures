<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $DomainName
 * @property string $KeyName
 * @property list<string> $Values
 * @property list<Shapes\AdditionalSearchKey>|null $AdditionalSearchKeys
 * @property 'AND'|'OR'|null $LogicalOperator
 */
class SearchProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     DomainName: string,
     *     KeyName: string,
     *     Values: list<string>,
     *     AdditionalSearchKeys?: list<Shapes\AdditionalSearchKey>|null,
     *     LogicalOperator?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
