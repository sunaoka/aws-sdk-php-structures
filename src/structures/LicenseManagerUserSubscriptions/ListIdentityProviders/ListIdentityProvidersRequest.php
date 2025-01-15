<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListIdentityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListIdentityProvidersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
