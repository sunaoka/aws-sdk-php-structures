<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $dataSourceId
 * @property string $dataSourceArn
 * @property string $displayName
 * @property string $type
 * @property Shapes\DataSourceConfiguration $configuration
 * @property Shapes\DataSourceVpcConfiguration $vpcConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $description
 * @property 'PENDING_CREATION'|'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $status
 * @property string $syncSchedule
 * @property string $roleArn
 * @property Shapes\ErrorDetail $error
 * @property Shapes\DocumentEnrichmentConfiguration $documentEnrichmentConfiguration
 * @property Shapes\MediaExtractionConfiguration $mediaExtractionConfiguration
 */
class GetDataSourceResponse extends Response
{
}
