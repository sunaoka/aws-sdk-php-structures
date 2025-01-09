<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ScanProvisionedProducts\Shapes;

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
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string $LaunchRoleArn
 */
class ProvisionedProductDetail extends Shape
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
     *     ProductId?: string,
     *     ProvisioningArtifactId?: string,
     *     LaunchRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
