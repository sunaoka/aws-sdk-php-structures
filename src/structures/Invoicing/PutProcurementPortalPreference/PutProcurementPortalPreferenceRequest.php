<?php

namespace Sunaoka\Aws\Structures\Invoicing\PutProcurementPortalPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 * @property Shapes\ProcurementPortalPreferenceSelector|null $Selector
 * @property string|null $ProcurementPortalSharedSecret
 * @property string|null $ProcurementPortalInstanceEndpoint
 * @property Shapes\TestEnvPreferenceInput|null $TestEnvPreference
 * @property bool $EinvoiceDeliveryEnabled
 * @property Shapes\EinvoiceDeliveryPreference|null $EinvoiceDeliveryPreference
 * @property bool $PurchaseOrderRetrievalEnabled
 * @property list<Shapes\Contact> $Contacts
 */
class PutProcurementPortalPreferenceRequest extends Request
{
    /**
     * @param array{
     *     ProcurementPortalPreferenceArn: string,
     *     Selector?: Shapes\ProcurementPortalPreferenceSelector|null,
     *     ProcurementPortalSharedSecret?: string|null,
     *     ProcurementPortalInstanceEndpoint?: string|null,
     *     TestEnvPreference?: Shapes\TestEnvPreferenceInput|null,
     *     EinvoiceDeliveryEnabled: bool,
     *     EinvoiceDeliveryPreference?: Shapes\EinvoiceDeliveryPreference|null,
     *     PurchaseOrderRetrievalEnabled: bool,
     *     Contacts: list<Shapes\Contact>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
