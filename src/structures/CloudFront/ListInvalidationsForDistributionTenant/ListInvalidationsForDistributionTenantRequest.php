<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidationsForDistributionTenant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Marker
 * @property int|null $MaxItems
 */
class ListInvalidationsForDistributionTenantRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Marker?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
