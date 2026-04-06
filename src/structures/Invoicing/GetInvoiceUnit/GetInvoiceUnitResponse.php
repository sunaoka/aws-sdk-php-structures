<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoiceUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InvoiceUnitArn
 * @property string|null $InvoiceReceiver
 * @property string|null $Name
 * @property string|null $Description
 * @property bool|null $TaxInheritanceDisabled
 * @property Shapes\InvoiceUnitRule|null $Rule
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class GetInvoiceUnitResponse extends Response
{
}
