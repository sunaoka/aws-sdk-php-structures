<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property JobSchedule $JobSchedule
 * @property AutoMerging $AutoMerging
 * @property ExportingConfig $ExportingConfig
 */
class MatchingResponse extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     JobSchedule?: JobSchedule,
     *     AutoMerging?: AutoMerging,
     *     ExportingConfig?: ExportingConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
