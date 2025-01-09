<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoTuneOptions $Options
 * @property AutoTuneStatus $Status
 */
class AutoTuneOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: AutoTuneOptions,
     *     Status?: AutoTuneStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
