<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $templateId
 * @property string $templateArn
 * @property string $name
 * @property string|null $description
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property array<string, string>|null $tags
 * @property 'Active'|'Inactive' $status
 * @property bool|null $deleted
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property list<Shapes\TemplateRule>|null $rules
 * @property list<Shapes\TagPropagationConfiguration>|null $tagPropagationConfigurations
 */
class GetTemplateResponse extends Response
{
}
