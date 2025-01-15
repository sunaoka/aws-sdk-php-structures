<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null $EMAIL
 * @property array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null $SMS
 * @property array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null $PUSH
 * @property array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null $VOICE
 * @property array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null $CUSTOM
 */
class OpenHours extends Shape
{
    /**
     * @param array{
     *     EMAIL?: array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null,
     *     SMS?: array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null,
     *     PUSH?: array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null,
     *     VOICE?: array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null,
     *     CUSTOM?: array<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY', list<OpenHoursRule>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
