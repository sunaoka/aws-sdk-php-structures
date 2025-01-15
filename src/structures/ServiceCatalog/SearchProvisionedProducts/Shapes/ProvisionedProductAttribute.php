<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProvisionedProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Type
 * @property string|null $Id
 * @property 'AVAILABLE'|'UNDER_CHANGE'|'TAINTED'|'ERROR'|'PLAN_IN_PROGRESS'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $IdempotencyToken
 * @property string|null $LastRecordId
 * @property string|null $LastProvisioningRecordId
 * @property string|null $LastSuccessfulProvisioningRecordId
 * @property list<Tag>|null $Tags
 * @property string|null $PhysicalId
 * @property string|null $ProductId
 * @property string|null $ProductName
 * @property string|null $ProvisioningArtifactId
 * @property string|null $ProvisioningArtifactName
 * @property string|null $UserArn
 * @property string|null $UserArnSession
 */
class ProvisionedProductAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Type?: string|null,
     *     Id?: string|null,
     *     Status?: 'AVAILABLE'|'UNDER_CHANGE'|'TAINTED'|'ERROR'|'PLAN_IN_PROGRESS'|null,
     *     StatusMessage?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     IdempotencyToken?: string|null,
     *     LastRecordId?: string|null,
     *     LastProvisioningRecordId?: string|null,
     *     LastSuccessfulProvisioningRecordId?: string|null,
     *     Tags?: list<Tag>|null,
     *     PhysicalId?: string|null,
     *     ProductId?: string|null,
     *     ProductName?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     ProvisioningArtifactName?: string|null,
     *     UserArn?: string|null,
     *     UserArnSession?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
