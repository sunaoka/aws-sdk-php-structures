<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, string>|null $Info
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE_AMI'|'MARKETPLACE_CAR'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL'|null $Type
 * @property bool|null $DisableTemplateValidation
 */
class ProvisioningArtifactProperties extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Info?: array<string, string>|null,
     *     Type?: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE_AMI'|'MARKETPLACE_CAR'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL'|null,
     *     DisableTemplateValidation?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
