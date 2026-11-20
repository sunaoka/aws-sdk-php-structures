<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartCustomerAccountBulkJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $FileUri
 */
class StartCustomerAccountBulkJobRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     FileUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
