<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $checkDescription
 * @property string $checkId
 * @property 'LEVEL_1'|'LEVEL_2' $level
 * @property string $platform
 * @property string $scanArn
 * @property StatusCounts $statusCounts
 * @property string $title
 */
class CisCheckAggregation extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     checkDescription?: string,
     *     checkId?: string,
     *     level?: 'LEVEL_1'|'LEVEL_2',
     *     platform?: string,
     *     scanArn: string,
     *     statusCounts?: StatusCounts,
     *     title?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
