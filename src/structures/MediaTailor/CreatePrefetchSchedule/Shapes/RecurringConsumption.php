<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RetrievedAdExpirationSeconds
 * @property list<AvailMatchingCriteria>|null $AvailMatchingCriteria
 */
class RecurringConsumption extends Shape
{
    /**
     * @param array{
     *     RetrievedAdExpirationSeconds?: int|null,
     *     AvailMatchingCriteria?: list<AvailMatchingCriteria>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
