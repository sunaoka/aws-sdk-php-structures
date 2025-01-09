<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisionedProductName
 * @property string $ProvisionedProductId
 * @property string $ProductId
 * @property string $ProductName
 * @property string $ProvisioningArtifactId
 * @property string $ProvisioningArtifactName
 * @property string $PathId
 * @property string $PathName
 * @property list<Shapes\UpdateProvisioningParameter> $ProvisioningParameters
 * @property Shapes\UpdateProvisioningPreferences $ProvisioningPreferences
 * @property list<Shapes\Tag> $Tags
 * @property string $UpdateToken
 */
class UpdateProvisionedProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisionedProductName?: string,
     *     ProvisionedProductId?: string,
     *     ProductId?: string,
     *     ProductName?: string,
     *     ProvisioningArtifactId?: string,
     *     ProvisioningArtifactName?: string,
     *     PathId?: string,
     *     PathName?: string,
     *     ProvisioningParameters?: list<Shapes\UpdateProvisioningParameter>,
     *     ProvisioningPreferences?: Shapes\UpdateProvisioningPreferences,
     *     Tags?: list<Shapes\Tag>,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
