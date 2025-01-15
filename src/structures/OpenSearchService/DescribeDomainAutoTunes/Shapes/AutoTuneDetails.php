<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainAutoTunes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduledAutoTuneDetails|null $ScheduledAutoTuneDetails
 */
class AutoTuneDetails extends Shape
{
    /**
     * @param array{ScheduledAutoTuneDetails?: ScheduledAutoTuneDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
