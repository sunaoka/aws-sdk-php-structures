<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property list<SupportedHour> $supportedHours
 * @property list<DateInterval> $datesWithoutSupport
 */
class CommunicationTypeOptions extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     supportedHours?: list<SupportedHour>,
     *     datesWithoutSupport?: list<DateInterval>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
