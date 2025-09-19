<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListIdentityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 */
class ListIdentityProvidersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
