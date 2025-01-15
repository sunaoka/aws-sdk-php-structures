<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $ProvisionedProductName
 * @property string|null $ProvisionedProductId
 * @property string|null $ProductId
 * @property string|null $ProductName
 * @property string|null $ProvisioningArtifactId
 * @property string|null $ProvisioningArtifactName
 * @property string|null $PathId
 * @property string|null $PathName
 * @property list<Shapes\UpdateProvisioningParameter>|null $ProvisioningParameters
 * @property Shapes\UpdateProvisioningPreferences|null $ProvisioningPreferences
 * @property list<Shapes\Tag>|null $Tags
 * @property string $UpdateToken
 */
class UpdateProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProvisionedProductName?: string|null,
     *     ProvisionedProductId?: string|null,
     *     ProductId?: string|null,
     *     ProductName?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     ProvisioningArtifactName?: string|null,
     *     PathId?: string|null,
     *     PathName?: string|null,
     *     ProvisioningParameters?: list<Shapes\UpdateProvisioningParameter>|null,
     *     ProvisioningPreferences?: Shapes\UpdateProvisioningPreferences|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
