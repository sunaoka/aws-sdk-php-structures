<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property bool|null $Affiliated
 */
class RemoteAccountDetails extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Affiliated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
