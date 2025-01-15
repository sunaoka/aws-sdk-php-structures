<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ScanProvisionedProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property Shapes\AccessLevelFilter|null $AccessLevelFilter
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ScanProvisionedProductsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
