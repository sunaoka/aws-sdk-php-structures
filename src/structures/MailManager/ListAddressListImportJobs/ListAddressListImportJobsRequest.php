<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddressListImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressListId
 * @property string|null $NextToken
 * @property int<1, 50>|null $PageSize
 */
class ListAddressListImportJobsRequest extends Request
{
    /**
     * @param array{
     *     AddressListId: string,
     *     NextToken?: string|null,
     *     PageSize?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
