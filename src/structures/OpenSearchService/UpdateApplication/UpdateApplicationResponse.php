<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property list<Shapes\DataSource> $dataSources
 * @property Shapes\IamIdentityCenterOptions $iamIdentityCenterOptions
 * @property list<Shapes\AppConfig> $appConfigs
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class UpdateApplicationResponse extends Response
{
}
