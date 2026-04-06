<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListUserAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListUserAssociationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     InstanceId: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
