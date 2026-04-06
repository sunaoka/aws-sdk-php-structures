<?php

namespace Sunaoka\Aws\Structures\Invoicing;

class InvoicingClient extends \Aws\Invoicing\InvoicingClient
{
    use BatchGetInvoiceProfile\BatchGetInvoiceProfileTrait;
    use CreateInvoiceUnit\CreateInvoiceUnitTrait;
    use CreateProcurementPortalPreference\CreateProcurementPortalPreferenceTrait;
    use DeleteInvoiceUnit\DeleteInvoiceUnitTrait;
    use DeleteProcurementPortalPreference\DeleteProcurementPortalPreferenceTrait;
    use GetInvoicePDF\GetInvoicePDFTrait;
    use GetInvoiceUnit\GetInvoiceUnitTrait;
    use GetProcurementPortalPreference\GetProcurementPortalPreferenceTrait;
    use ListInvoiceSummaries\ListInvoiceSummariesTrait;
    use ListInvoiceUnits\ListInvoiceUnitsTrait;
    use ListProcurementPortalPreferences\ListProcurementPortalPreferencesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutProcurementPortalPreference\PutProcurementPortalPreferenceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateInvoiceUnit\UpdateInvoiceUnitTrait;
    use UpdateProcurementPortalPreferenceStatus\UpdateProcurementPortalPreferenceStatusTrait;
}
