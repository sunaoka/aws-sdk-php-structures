<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainAutoTunes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduledAutoTuneDetails $ScheduledAutoTuneDetails
 */
class AutoTuneDetails extends Shape
{
    /**
     * @param array{ScheduledAutoTuneDetails?: ScheduledAutoTuneDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
