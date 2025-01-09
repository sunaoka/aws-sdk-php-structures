<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $displayName
 * @property string $indexArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING' $status
 * @property 'ENTERPRISE'|'STARTER' $type
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\IndexCapacityConfiguration $capacityConfiguration
 * @property list<Shapes\DocumentAttributeConfiguration> $documentAttributeConfigurations
 * @property Shapes\ErrorDetail $error
 * @property Shapes\IndexStatistics $indexStatistics
 */
class GetIndexResponse extends Response
{
}
