<?php

namespace Sunaoka\Aws\Structures\Route53\ListVPCAssociationAuthorizations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string|null $NextToken
 * @property string|null $MaxResults
 */
class ListVPCAssociationAuthorizationsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     NextToken?: string|null,
     *     MaxResults?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
