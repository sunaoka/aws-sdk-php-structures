<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProjectArn
 * @property string $ProjectName
 * @property string $ProjectId
 * @property string|null $ProjectDescription
 * @property Shapes\ServiceCatalogProvisioningDetails|null $ServiceCatalogProvisioningDetails
 * @property Shapes\ServiceCatalogProvisionedProductDetails|null $ServiceCatalogProvisionedProductDetails
 * @property 'Pending'|'CreateInProgress'|'CreateCompleted'|'CreateFailed'|'DeleteInProgress'|'DeleteFailed'|'DeleteCompleted'|'UpdateInProgress'|'UpdateCompleted'|'UpdateFailed' $ProjectStatus
 * @property list<Shapes\TemplateProviderDetail>|null $TemplateProviderDetails
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 */
class DescribeProjectResponse extends Response
{
}
