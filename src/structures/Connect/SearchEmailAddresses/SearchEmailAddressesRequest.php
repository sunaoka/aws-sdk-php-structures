<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\EmailAddressSearchCriteria $SearchCriteria
 * @property Shapes\EmailAddressSearchFilter $SearchFilter
 */
class SearchEmailAddressesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     SearchCriteria?: Shapes\EmailAddressSearchCriteria,
     *     SearchFilter?: Shapes\EmailAddressSearchFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
