<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationId
 * @property string|null $indexId
 * @property string|null $displayName
 * @property string|null $indexArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|null $status
 * @property 'ENTERPRISE'|'STARTER'|null $type
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property Shapes\IndexCapacityConfiguration|null $capacityConfiguration
 * @property list<Shapes\DocumentAttributeConfiguration>|null $documentAttributeConfigurations
 * @property Shapes\ErrorDetail|null $error
 * @property Shapes\IndexStatistics|null $indexStatistics
 */
class GetIndexResponse extends Response
{
}
