<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property bool $Affiliated
 */
class RemoteAccountDetails extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Affiliated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
