<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property list<Shapes\DataSource>|null $dataSources
 * @property Shapes\IamIdentityCenterOptions|null $iamIdentityCenterOptions
 * @property list<Shapes\AppConfig>|null $appConfigs
 * @property list<Shapes\Tag>|null $tagList
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $kmsKeyArn
 */
class CreateApplicationResponse extends Response
{
}
