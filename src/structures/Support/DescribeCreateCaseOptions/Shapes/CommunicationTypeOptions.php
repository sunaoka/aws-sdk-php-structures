<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property list<SupportedHour>|null $supportedHours
 * @property list<DateInterval>|null $datesWithoutSupport
 */
class CommunicationTypeOptions extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     supportedHours?: list<SupportedHour>|null,
     *     datesWithoutSupport?: list<DateInterval>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
