<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProvisionedProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Type
 * @property string $Id
 * @property 'AVAILABLE'|'UNDER_CHANGE'|'TAINTED'|'ERROR'|'PLAN_IN_PROGRESS' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $IdempotencyToken
 * @property string $LastRecordId
 * @property string $LastProvisioningRecordId
 * @property string $LastSuccessfulProvisioningRecordId
 * @property list<Tag> $Tags
 * @property string $PhysicalId
 * @property string $ProductId
 * @property string $ProductName
 * @property string $ProvisioningArtifactId
 * @property string $ProvisioningArtifactName
 * @property string $UserArn
 * @property string $UserArnSession
 */
class ProvisionedProductAttribute extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Type?: string,
     *     Id?: string,
     *     Status?: 'AVAILABLE'|'UNDER_CHANGE'|'TAINTED'|'ERROR'|'PLAN_IN_PROGRESS',
     *     StatusMessage?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     IdempotencyToken?: string,
     *     LastRecordId?: string,
     *     LastProvisioningRecordId?: string,
     *     LastSuccessfulProvisioningRecordId?: string,
     *     Tags?: list<Tag>,
     *     PhysicalId?: string,
     *     ProductId?: string,
     *     ProductName?: string,
     *     ProvisioningArtifactId?: string,
     *     ProvisioningArtifactName?: string,
     *     UserArn?: string,
     *     UserArnSession?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
