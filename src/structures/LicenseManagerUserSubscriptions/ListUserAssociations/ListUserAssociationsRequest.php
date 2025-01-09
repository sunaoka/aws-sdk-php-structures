<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListUserAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property string $InstanceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListUserAssociationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     InstanceId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
