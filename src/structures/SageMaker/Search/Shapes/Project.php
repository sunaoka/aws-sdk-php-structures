<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectArn
 * @property string|null $ProjectName
 * @property string|null $ProjectId
 * @property string|null $ProjectDescription
 * @property ServiceCatalogProvisioningDetails|null $ServiceCatalogProvisioningDetails
 * @property ServiceCatalogProvisionedProductDetails|null $ServiceCatalogProvisionedProductDetails
 * @property 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed'|null $ProjectStatus
 * @property UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<TemplateProviderDetail>|null $TemplateProviderDetails
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 */
class Project extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string|null,
     *     ProjectName?: string|null,
     *     ProjectId?: string|null,
     *     ProjectDescription?: string|null,
     *     ServiceCatalogProvisioningDetails?: ServiceCatalogProvisioningDetails|null,
     *     ServiceCatalogProvisionedProductDetails?: ServiceCatalogProvisionedProductDetails|null,
     *     ProjectStatus?: 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed'|null,
     *     CreatedBy?: UserContext|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TemplateProviderDetails?: list<TemplateProviderDetail>|null,
     *     Tags?: list<Tag>|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
