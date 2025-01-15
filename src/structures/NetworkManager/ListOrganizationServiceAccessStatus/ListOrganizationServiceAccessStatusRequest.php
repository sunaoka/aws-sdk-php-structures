<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListOrganizationServiceAccessStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOrganizationServiceAccessStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
