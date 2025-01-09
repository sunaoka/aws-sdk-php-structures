<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Page $Page
 * @property TimingInformation $TimingInformation
 * @property IOUsage $ConsumedIOs
 */
class FetchPageResult extends Shape
{
    /**
     * @param array{
     *     Page?: Page,
     *     TimingInformation?: TimingInformation,
     *     ConsumedIOs?: IOUsage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
