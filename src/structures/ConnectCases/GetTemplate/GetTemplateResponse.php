<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $description
 * @property Shapes\LayoutConfiguration|null $layoutConfiguration
 * @property string $name
 * @property list<Shapes\RequiredField>|null $requiredFields
 * @property 'Active'|'Inactive' $status
 * @property array<string, string>|null $tags
 * @property string $templateArn
 * @property string $templateId
 */
class GetTemplateResponse extends Response
{
}
