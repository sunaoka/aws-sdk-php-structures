<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $DomainName
 * @property string $KeyName
 * @property list<string> $Values
 * @property list<Shapes\AdditionalSearchKey> $AdditionalSearchKeys
 * @property 'AND'|'OR' $LogicalOperator
 */
class SearchProfilesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     DomainName: string,
     *     KeyName: string,
     *     Values: list<string>,
     *     AdditionalSearchKeys?: list<Shapes\AdditionalSearchKey>,
     *     LogicalOperator?: 'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
