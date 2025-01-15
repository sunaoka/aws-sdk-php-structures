<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AnalysisId
 * @property string|null $Name
 * @property list<Shapes\AnalysisError>|null $Errors
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $ResourceStatus
 * @property string|null $ThemeArn
 * @property Shapes\AnalysisDefinition|null $Definition
 * @property int|null $Status
 * @property string|null $RequestId
 */
class DescribeAnalysisDefinitionResponse extends Response
{
}
