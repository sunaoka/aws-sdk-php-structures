<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $TemplateId
 * @property list<Shapes\TemplateError>|null $Errors
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $ResourceStatus
 * @property string|null $ThemeArn
 * @property Shapes\TemplateVersionDefinition|null $Definition
 * @property int|null $Status
 * @property string|null $RequestId
 */
class DescribeTemplateDefinitionResponse extends Response
{
}
