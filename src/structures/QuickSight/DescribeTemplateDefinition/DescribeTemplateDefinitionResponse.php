<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $TemplateId
 * @property list<Shapes\TemplateError> $Errors
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $ResourceStatus
 * @property string $ThemeArn
 * @property Shapes\TemplateVersionDefinition $Definition
 * @property int $Status
 * @property string $RequestId
 */
class DescribeTemplateDefinitionResponse extends Response
{
}
