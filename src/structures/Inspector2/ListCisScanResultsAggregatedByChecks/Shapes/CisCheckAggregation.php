<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $checkDescription
 * @property string|null $checkId
 * @property 'LEVEL_1'|'LEVEL_2'|null $level
 * @property string|null $platform
 * @property string $scanArn
 * @property StatusCounts|null $statusCounts
 * @property string|null $title
 */
class CisCheckAggregation extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     checkDescription?: string|null,
     *     checkId?: string|null,
     *     level?: 'LEVEL_1'|'LEVEL_2'|null,
     *     platform?: string|null,
     *     scanArn: string,
     *     statusCounts?: StatusCounts|null,
     *     title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
