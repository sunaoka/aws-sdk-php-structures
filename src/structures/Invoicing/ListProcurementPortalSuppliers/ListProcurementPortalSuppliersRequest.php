<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortalSuppliers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PortalIdentifier
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListProcurementPortalSuppliersRequest extends Request
{
    /**
     * @param array{
     *     PortalIdentifier: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
