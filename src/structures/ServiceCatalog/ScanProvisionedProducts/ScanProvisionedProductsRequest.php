<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ScanProvisionedProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property Shapes\AccessLevelFilter $AccessLevelFilter
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 */
class ScanProvisionedProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
