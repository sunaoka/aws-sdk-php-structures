<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 * @property string $ProjectName
 * @property string $ProjectId
 * @property string $ProjectDescription
 * @property ServiceCatalogProvisioningDetails $ServiceCatalogProvisioningDetails
 * @property ServiceCatalogProvisionedProductDetails $ServiceCatalogProvisionedProductDetails
 * @property 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed' $ProjectStatus
 * @property UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 */
class Project extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string,
     *     ProjectName?: string,
     *     ProjectId?: string,
     *     ProjectDescription?: string,
     *     ServiceCatalogProvisioningDetails?: ServiceCatalogProvisioningDetails,
     *     ServiceCatalogProvisionedProductDetails?: ServiceCatalogProvisionedProductDetails,
     *     ProjectStatus?: 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed',
     *     CreatedBy?: UserContext,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
