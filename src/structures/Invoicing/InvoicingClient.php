<?php

namespace Sunaoka\Aws\Structures\Invoicing;

class InvoicingClient extends \Aws\Invoicing\InvoicingClient
{
    use BatchGetInvoiceProfile\BatchGetInvoiceProfileTrait;
    use CreateInvoiceUnit\CreateInvoiceUnitTrait;
    use DeleteInvoiceUnit\DeleteInvoiceUnitTrait;
    use GetInvoicePDF\GetInvoicePDFTrait;
    use GetInvoiceUnit\GetInvoiceUnitTrait;
    use ListInvoiceSummaries\ListInvoiceSummariesTrait;
    use ListInvoiceUnits\ListInvoiceUnitsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateInvoiceUnit\UpdateInvoiceUnitTrait;
}
