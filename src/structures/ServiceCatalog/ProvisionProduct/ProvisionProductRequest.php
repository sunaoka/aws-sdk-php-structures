<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ProvisionProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property string $ProductName
 * @property string $ProvisioningArtifactId
 * @property string $ProvisioningArtifactName
 * @property string $PathId
 * @property string $PathName
 * @property string $ProvisionedProductName
 * @property list<Shapes\ProvisioningParameter> $ProvisioningParameters
 * @property Shapes\ProvisioningPreferences $ProvisioningPreferences
 * @property list<Shapes\Tag> $Tags
 * @property list<string> $NotificationArns
 * @property string $ProvisionToken
 */
class ProvisionProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId?: string,
     *     ProductName?: string,
     *     ProvisioningArtifactId?: string,
     *     ProvisioningArtifactName?: string,
     *     PathId?: string,
     *     PathName?: string,
     *     ProvisionedProductName: string,
     *     ProvisioningParameters?: list<Shapes\ProvisioningParameter>,
     *     ProvisioningPreferences?: Shapes\ProvisioningPreferences,
     *     Tags?: list<Shapes\Tag>,
     *     NotificationArns?: list<string>,
     *     ProvisionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
