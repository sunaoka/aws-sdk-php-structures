<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property list<Shapes\DataSource> $dataSources
 * @property Shapes\IamIdentityCenterOptions $iamIdentityCenterOptions
 * @property list<Shapes\AppConfig> $appConfigs
 * @property list<Shapes\Tag> $tagList
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateApplicationResponse extends Response
{
}
