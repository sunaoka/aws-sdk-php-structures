<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE_AMI'|'MARKETPLACE_CAR'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL'|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property bool|null $Active
 * @property 'DEFAULT'|'DEPRECATED'|null $Guidance
 * @property string|null $SourceRevision
 */
class ProvisioningArtifactDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Type?: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE_AMI'|'MARKETPLACE_CAR'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Active?: bool|null,
     *     Guidance?: 'DEFAULT'|'DEPRECATED'|null,
     *     SourceRevision?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
