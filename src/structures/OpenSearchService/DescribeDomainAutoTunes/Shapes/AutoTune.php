<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainAutoTunes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCHEDULED_ACTION' $AutoTuneType
 * @property AutoTuneDetails $AutoTuneDetails
 */
class AutoTune extends Shape
{
    /**
     * @param array{
     *     AutoTuneType?: 'SCHEDULED_ACTION',
     *     AutoTuneDetails?: AutoTuneDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
