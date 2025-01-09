<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $endpoint
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property Shapes\IamIdentityCenterOptions $iamIdentityCenterOptions
 * @property list<Shapes\DataSource> $dataSources
 * @property list<Shapes\AppConfig> $appConfigs
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class GetApplicationResponse extends Response
{
}
