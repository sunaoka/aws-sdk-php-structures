<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListStackInstancesForProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisionedProductId
 * @property string $PageToken
 * @property int $PageSize
 */
class ListStackInstancesForProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisionedProductId: string,
     *     PageToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
