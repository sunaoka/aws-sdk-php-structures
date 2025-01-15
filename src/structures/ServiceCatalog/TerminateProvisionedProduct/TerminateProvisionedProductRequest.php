<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\TerminateProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProvisionedProductName
 * @property string|null $ProvisionedProductId
 * @property string $TerminateToken
 * @property bool|null $IgnoreErrors
 * @property string|null $AcceptLanguage
 * @property bool|null $RetainPhysicalResources
 */
class TerminateProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     ProvisionedProductName?: string|null,
     *     ProvisionedProductId?: string|null,
     *     TerminateToken: string,
     *     IgnoreErrors?: bool|null,
     *     AcceptLanguage?: string|null,
     *     RetainPhysicalResources?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
