<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $AnalysisId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED' $UpdateStatus
 * @property int $Status
 * @property string $RequestId
 */
class UpdateAnalysisResponse extends Response
{
}
