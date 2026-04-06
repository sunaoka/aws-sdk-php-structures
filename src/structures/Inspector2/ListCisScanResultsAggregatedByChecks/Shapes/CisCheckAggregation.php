<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanArn
 * @property string|null $checkId
 * @property string|null $title
 * @property string|null $checkDescription
 * @property 'LEVEL_1'|'LEVEL_2'|null $level
 * @property string|null $accountId
 * @property StatusCounts|null $statusCounts
 * @property string|null $platform
 */
class CisCheckAggregation extends Shape
{
    /**
     * @param array{
     *     scanArn: string,
     *     checkId?: string|null,
     *     title?: string|null,
     *     checkDescription?: string|null,
     *     level?: 'LEVEL_1'|'LEVEL_2'|null,
     *     accountId?: string|null,
     *     statusCounts?: StatusCounts|null,
     *     platform?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
