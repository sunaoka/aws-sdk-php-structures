<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListLicenseServerEndpointsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
