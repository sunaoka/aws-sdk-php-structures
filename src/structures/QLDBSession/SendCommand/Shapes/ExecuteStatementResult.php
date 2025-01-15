<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Page|null $FirstPage
 * @property TimingInformation|null $TimingInformation
 * @property IOUsage|null $ConsumedIOs
 */
class ExecuteStatementResult extends Shape
{
    /**
     * @param array{
     *     FirstPage?: Page|null,
     *     TimingInformation?: TimingInformation|null,
     *     ConsumedIOs?: IOUsage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
