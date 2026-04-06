<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\QAResult|null $PrimaryResult
 * @property list<Shapes\QAResult>|null $AdditionalResults
 * @property string|null $RequestId
 * @property int|null $Status
 */
class PredictQAResultsResponse extends Response
{
}
