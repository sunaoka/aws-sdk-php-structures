<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListStackInstancesForProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisionedProductId
 * @property string $PageToken
 * @property int<0, 20> $PageSize
 */
class ListStackInstancesForProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisionedProductId: string,
     *     PageToken?: string,
     *     PageSize?: int<0, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
