<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListOrganizationServiceAccessStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class ListOrganizationServiceAccessStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
