<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProjectArn
 * @property string $ProjectName
 * @property string $ProjectId
 * @property string $ProjectDescription
 * @property Shapes\ServiceCatalogProvisioningDetails $ServiceCatalogProvisioningDetails
 * @property Shapes\ServiceCatalogProvisionedProductDetails $ServiceCatalogProvisionedProductDetails
 * @property 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed' $ProjectStatus
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 */
class DescribeProjectResponse extends Response
{
}
