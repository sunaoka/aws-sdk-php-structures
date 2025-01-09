<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\TerminateProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProvisionedProductName
 * @property string $ProvisionedProductId
 * @property string $TerminateToken
 * @property bool $IgnoreErrors
 * @property string $AcceptLanguage
 * @property bool $RetainPhysicalResources
 */
class TerminateProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     ProvisionedProductName?: string,
     *     ProvisionedProductId?: string,
     *     TerminateToken: string,
     *     IgnoreErrors?: bool,
     *     AcceptLanguage?: string,
     *     RetainPhysicalResources?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
