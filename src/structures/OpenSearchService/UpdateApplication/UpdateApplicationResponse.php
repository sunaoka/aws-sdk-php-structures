<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property list<Shapes\DataSource>|null $dataSources
 * @property Shapes\IamIdentityCenterOptions|null $iamIdentityCenterOptions
 * @property list<Shapes\AppConfig>|null $appConfigs
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class UpdateApplicationResponse extends Response
{
}
