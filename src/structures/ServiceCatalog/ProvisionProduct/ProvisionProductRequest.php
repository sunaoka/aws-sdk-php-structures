<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ProvisionProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $ProductId
 * @property string|null $ProductName
 * @property string|null $ProvisioningArtifactId
 * @property string|null $ProvisioningArtifactName
 * @property string|null $PathId
 * @property string|null $PathName
 * @property string $ProvisionedProductName
 * @property list<Shapes\ProvisioningParameter>|null $ProvisioningParameters
 * @property Shapes\ProvisioningPreferences|null $ProvisioningPreferences
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $NotificationArns
 * @property string $ProvisionToken
 */
class ProvisionProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId?: string|null,
     *     ProductName?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     ProvisioningArtifactName?: string|null,
     *     PathId?: string|null,
     *     PathName?: string|null,
     *     ProvisionedProductName: string,
     *     ProvisioningParameters?: list<Shapes\ProvisioningParameter>|null,
     *     ProvisioningPreferences?: Shapes\ProvisioningPreferences|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     NotificationArns?: list<string>|null,
     *     ProvisionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
