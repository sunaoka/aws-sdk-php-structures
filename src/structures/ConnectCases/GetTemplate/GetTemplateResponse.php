<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property bool|null $deleted
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property string $name
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property list<Shapes\TemplateRule>|null $rules
 * @property 'Active'|'Inactive' $status
 * @property array<string, string>|null $tags
 * @property string $templateArn
 * @property string $templateId
 */
class GetTemplateResponse extends Response
{
}
