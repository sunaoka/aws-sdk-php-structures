<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\EmailAddressSearchCriteria|null $SearchCriteria
 * @property Shapes\EmailAddressSearchFilter|null $SearchFilter
 */
class SearchEmailAddressesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SearchCriteria?: Shapes\EmailAddressSearchCriteria|null,
     *     SearchFilter?: Shapes\EmailAddressSearchFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
