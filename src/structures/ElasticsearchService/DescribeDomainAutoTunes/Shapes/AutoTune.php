<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainAutoTunes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCHEDULED_ACTION'|null $AutoTuneType
 * @property AutoTuneDetails|null $AutoTuneDetails
 */
class AutoTune extends Shape
{
    /**
     * @param array{
     *     AutoTuneType?: 'SCHEDULED_ACTION'|null,
     *     AutoTuneDetails?: AutoTuneDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
