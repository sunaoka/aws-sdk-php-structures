<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $Day
 * @property string $StartTimeUtc
 * @property string $EndTimeUtc
 */
class BestOutreachWindow extends Shape
{
    /**
     * @param array{
     *     Day: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     StartTimeUtc: string,
     *     EndTimeUtc: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
