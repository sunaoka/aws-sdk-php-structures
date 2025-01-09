<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appId
 * @property string $appArn
 * @property string $title
 * @property string $description
 * @property string $initialPrompt
 * @property int $appVersion
 * @property 'PUBLISHED'|'DRAFT'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property list<'FileUpload'|'CreatorMode'|'RetrievalMode'|'PluginMode'> $requiredCapabilities
 * @property Shapes\AppDefinition $appDefinition
 */
class GetQAppResponse extends Response
{
}
