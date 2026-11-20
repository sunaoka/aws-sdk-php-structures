<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateRevenueAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $Revision
 * @property array<string, string>|null $Context
 */
class UpdateRevenueAttributionRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Revision: string,
     *     Context?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
