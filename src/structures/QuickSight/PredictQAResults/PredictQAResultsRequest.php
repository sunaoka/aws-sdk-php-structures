<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $QueryText
 * @property 'INCLUDE'|'EXCLUDE'|null $IncludeQuickSightQIndex
 * @property 'INCLUDE'|'EXCLUDE'|null $IncludeGeneratedAnswer
 * @property int<1, 4>|null $MaxTopicsToConsider
 */
class PredictQAResultsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     QueryText: string,
     *     IncludeQuickSightQIndex?: 'INCLUDE'|'EXCLUDE'|null,
     *     IncludeGeneratedAnswer?: 'INCLUDE'|'EXCLUDE'|null,
     *     MaxTopicsToConsider?: int<1, 4>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
