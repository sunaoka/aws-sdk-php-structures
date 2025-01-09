<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ScanProvisionedProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property Shapes\AccessLevelFilter $AccessLevelFilter
 * @property int $PageSize
 * @property string $PageToken
 */
class ScanProvisionedProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
