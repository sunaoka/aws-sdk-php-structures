<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property bool $deleted
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property Shapes\LayoutConfiguration $layoutConfiguration
 * @property string $name
 * @property list<Shapes\RequiredField> $requiredFields
 * @property 'Active'|'Inactive' $status
 * @property array<string, string> $tags
 * @property string $templateArn
 * @property string $templateId
 */
class GetTemplateResponse extends Response
{
}
