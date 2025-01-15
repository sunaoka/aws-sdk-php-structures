<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property JobSchedule|null $JobSchedule
 * @property AutoMerging|null $AutoMerging
 * @property ExportingConfig|null $ExportingConfig
 */
class MatchingResponse extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     JobSchedule?: JobSchedule|null,
     *     AutoMerging?: AutoMerging|null,
     *     ExportingConfig?: ExportingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
