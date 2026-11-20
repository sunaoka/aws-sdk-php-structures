<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartOpportunityBulkJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $FileURI
 * @property 'CSV' $FileFormat
 */
class StartOpportunityBulkJobRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     FileURI: string,
     *     FileFormat: 'CSV'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
