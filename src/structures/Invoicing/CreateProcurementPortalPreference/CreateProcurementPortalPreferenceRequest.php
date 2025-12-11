<?php

namespace Sunaoka\Aws\Structures\Invoicing\CreateProcurementPortalPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SAP_BUSINESS_NETWORK'|'COUPA' $ProcurementPortalName
 * @property 'NetworkID' $BuyerDomain
 * @property string $BuyerIdentifier
 * @property 'NetworkID' $SupplierDomain
 * @property string $SupplierIdentifier
 * @property Shapes\ProcurementPortalPreferenceSelector|null $Selector
 * @property string|null $ProcurementPortalSharedSecret
 * @property string|null $ProcurementPortalInstanceEndpoint
 * @property Shapes\TestEnvPreferenceInput|null $TestEnvPreference
 * @property bool $EinvoiceDeliveryEnabled
 * @property Shapes\EinvoiceDeliveryPreference|null $EinvoiceDeliveryPreference
 * @property bool $PurchaseOrderRetrievalEnabled
 * @property list<Shapes\Contact> $Contacts
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property string|null $ClientToken
 */
class CreateProcurementPortalPreferenceRequest extends Request
{
    /**
     * @param array{
     *     ProcurementPortalName: 'SAP_BUSINESS_NETWORK'|'COUPA',
     *     BuyerDomain: 'NetworkID',
     *     BuyerIdentifier: string,
     *     SupplierDomain: 'NetworkID',
     *     SupplierIdentifier: string,
     *     Selector?: Shapes\ProcurementPortalPreferenceSelector|null,
     *     ProcurementPortalSharedSecret?: string|null,
     *     ProcurementPortalInstanceEndpoint?: string|null,
     *     TestEnvPreference?: Shapes\TestEnvPreferenceInput|null,
     *     EinvoiceDeliveryEnabled: bool,
     *     EinvoiceDeliveryPreference?: Shapes\EinvoiceDeliveryPreference|null,
     *     PurchaseOrderRetrievalEnabled: bool,
     *     Contacts: list<Shapes\Contact>,
     *     ResourceTags?: list<Shapes\ResourceTag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
