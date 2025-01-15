<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Page|null $Page
 * @property TimingInformation|null $TimingInformation
 * @property IOUsage|null $ConsumedIOs
 */
class FetchPageResult extends Shape
{
    /**
     * @param array{
     *     Page?: Page|null,
     *     TimingInformation?: TimingInformation|null,
     *     ConsumedIOs?: IOUsage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
