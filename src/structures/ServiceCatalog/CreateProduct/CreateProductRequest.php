<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Name
 * @property string $Owner
 * @property string $Description
 * @property string $Distributor
 * @property string $SupportDescription
 * @property string $SupportEmail
 * @property string $SupportUrl
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL' $ProductType
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ProvisioningArtifactProperties $ProvisioningArtifactParameters
 * @property string $IdempotencyToken
 * @property Shapes\SourceConnection $SourceConnection
 */
class CreateProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Name: string,
     *     Owner: string,
     *     Description?: string,
     *     Distributor?: string,
     *     SupportDescription?: string,
     *     SupportEmail?: string,
     *     SupportUrl?: string,
     *     ProductType: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL',
     *     Tags?: list<Shapes\Tag>,
     *     ProvisioningArtifactParameters?: Shapes\ProvisioningArtifactProperties,
     *     IdempotencyToken: string,
     *     SourceConnection?: Shapes\SourceConnection
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
