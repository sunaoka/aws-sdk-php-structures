<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE_AMI'|'MARKETPLACE_CAR'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL' $Type
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property bool $Active
 * @property 'DEFAULT'|'DEPRECATED' $Guidance
 * @property string $SourceRevision
 */
class ProvisioningArtifactDetail extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     Type?: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE_AMI'|'MARKETPLACE_CAR'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Active?: bool,
     *     Guidance?: 'DEFAULT'|'DEPRECATED',
     *     SourceRevision?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
