<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $AnalysisId
 * @property 'CREATION_IN_PROGRESS'|'CREATION_SUCCESSFUL'|'CREATION_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_FAILED'|'DELETED'|null $UpdateStatus
 * @property int|null $Status
 * @property string|null $RequestId
 */
class UpdateAnalysisResponse extends Response
{
}
