<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Page $FirstPage
 * @property TimingInformation $TimingInformation
 * @property IOUsage $ConsumedIOs
 */
class ExecuteStatementResult extends Shape
{
    /**
     * @param array{
     *     FirstPage?: Page,
     *     TimingInformation?: TimingInformation,
     *     ConsumedIOs?: IOUsage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
