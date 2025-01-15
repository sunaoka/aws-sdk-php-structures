<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property JobSchedule|null $JobSchedule
 * @property AutoMerging|null $AutoMerging
 * @property ExportingConfig|null $ExportingConfig
 */
class MatchingRequest extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     JobSchedule?: JobSchedule|null,
     *     AutoMerging?: AutoMerging|null,
     *     ExportingConfig?: ExportingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
