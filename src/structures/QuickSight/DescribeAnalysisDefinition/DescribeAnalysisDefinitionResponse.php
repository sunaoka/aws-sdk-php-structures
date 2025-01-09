<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AnalysisId
 * @property string $Name
 * @property list<Shapes\AnalysisError> $Errors
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $ResourceStatus
 * @property string $ThemeArn
 * @property Shapes\AnalysisDefinition $Definition
 * @property int $Status
 * @property string $RequestId
 */
class DescribeAnalysisDefinitionResponse extends Response
{
}
