<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListProductSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Product
 */
class ListProductSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     Product?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
