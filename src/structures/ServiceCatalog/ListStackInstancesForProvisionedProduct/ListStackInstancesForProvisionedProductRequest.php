<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListStackInstancesForProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProvisionedProductId
 * @property string|null $PageToken
 * @property int<0, 20>|null $PageSize
 */
class ListStackInstancesForProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProvisionedProductId: string,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
