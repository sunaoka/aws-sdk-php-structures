<?php

namespace Sunaoka\Aws\Structures\Invoicing\PutProcurementPortalPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NetworkID' $BuyerDomain
 * @property string $BuyerIdentifier
 * @property 'NetworkID' $SupplierDomain
 * @property string $SupplierIdentifier
 * @property string|null $ProcurementPortalSharedSecret
 * @property string|null $ProcurementPortalInstanceEndpoint
 */
class TestEnvPreferenceInput extends Shape
{
    /**
     * @param array{
     *     BuyerDomain: 'NetworkID',
     *     BuyerIdentifier: string,
     *     SupplierDomain: 'NetworkID',
     *     SupplierIdentifier: string,
     *     ProcurementPortalSharedSecret?: string|null,
     *     ProcurementPortalInstanceEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
