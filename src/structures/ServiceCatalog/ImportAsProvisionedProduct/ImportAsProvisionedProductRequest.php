<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ImportAsProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string $ProvisionedProductName
 * @property string $PhysicalId
 * @property string $IdempotencyToken
 */
class ImportAsProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId: string,
     *     ProvisioningArtifactId: string,
     *     ProvisionedProductName: string,
     *     PhysicalId: string,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
