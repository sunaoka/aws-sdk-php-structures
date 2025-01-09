<?php

namespace Sunaoka\Aws\Structures\QuickSight\PredictQAResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $QueryText
 * @property 'INCLUDE'|'EXCLUDE' $IncludeQuickSightQIndex
 * @property 'INCLUDE'|'EXCLUDE' $IncludeGeneratedAnswer
 * @property int<1, 4> $MaxTopicsToConsider
 */
class PredictQAResultsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     QueryText: string,
     *     IncludeQuickSightQIndex?: 'INCLUDE'|'EXCLUDE',
     *     IncludeGeneratedAnswer?: 'INCLUDE'|'EXCLUDE',
     *     MaxTopicsToConsider?: int<1, 4>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
