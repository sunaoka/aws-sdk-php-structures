<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ArchivedCount
 * @property int<0, max>|null $UnarchivedCount
 * @property double|null $ArchivedPercentage
 * @property double|null $UnarchivedPercentage
 */
class ArchiveDistribution extends Shape
{
    /**
     * @param array{
     *     ArchivedCount?: int<0, max>|null,
     *     UnarchivedCount?: int<0, max>|null,
     *     ArchivedPercentage?: double|null,
     *     UnarchivedPercentage?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
