<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateRevenueAttribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string|null $ClientToken
 * @property string $Name
 * @property string|null $Description
 * @property 'MULTI_TENANT'|'SINGLE_TENANT' $TenancyModel
 * @property string|null $ProductIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRevenueAttributionRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ClientToken?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     TenancyModel: 'MULTI_TENANT'|'SINGLE_TENANT',
     *     ProductIdentifier?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
