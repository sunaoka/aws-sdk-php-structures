<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationId
 * @property string|null $indexId
 * @property string|null $dataSourceId
 * @property string|null $dataSourceArn
 * @property string|null $displayName
 * @property string|null $type
 * @property Shapes\DataSourceConfiguration|null $configuration
 * @property Shapes\DataSourceVpcConfiguration|null $vpcConfiguration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $description
 * @property 'PENDING_CREATION'|'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $status
 * @property string|null $syncSchedule
 * @property string|null $roleArn
 * @property Shapes\ErrorDetail|null $error
 * @property Shapes\DocumentEnrichmentConfiguration|null $documentEnrichmentConfiguration
 * @property Shapes\MediaExtractionConfiguration|null $mediaExtractionConfiguration
 */
class GetDataSourceResponse extends Response
{
}
