<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $Identifier
 * @property string|null $Revision
 */
class GetRevenueAttributionRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Identifier: string,
     *     Revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
