<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $endpoint
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property Shapes\IamIdentityCenterOptions|null $iamIdentityCenterOptions
 * @property list<Shapes\DataSource>|null $dataSources
 * @property list<Shapes\AppConfig>|null $appConfigs
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetApplicationResponse extends Response
{
}
