<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $Name
 * @property string $Owner
 * @property string|null $Description
 * @property string|null $Distributor
 * @property string|null $SupportDescription
 * @property string|null $SupportEmail
 * @property string|null $SupportUrl
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL' $ProductType
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ProvisioningArtifactProperties|null $ProvisioningArtifactParameters
 * @property string $IdempotencyToken
 * @property Shapes\SourceConnection|null $SourceConnection
 */
class CreateProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Name: string,
     *     Owner: string,
     *     Description?: string|null,
     *     Distributor?: string|null,
     *     SupportDescription?: string|null,
     *     SupportEmail?: string|null,
     *     SupportUrl?: string|null,
     *     ProductType: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL',
     *     Tags?: list<Shapes\Tag>|null,
     *     ProvisioningArtifactParameters?: Shapes\ProvisioningArtifactProperties|null,
     *     IdempotencyToken: string,
     *     SourceConnection?: Shapes\SourceConnection|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
