<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoiceUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InvoiceUnitArn
 * @property string $InvoiceReceiver
 * @property string $Name
 * @property string $Description
 * @property bool $TaxInheritanceDisabled
 * @property Shapes\InvoiceUnitRule $Rule
 * @property \Aws\Api\DateTimeResult $LastModified
 */
class GetInvoiceUnitResponse extends Response
{
}
