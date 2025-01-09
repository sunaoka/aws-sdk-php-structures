<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountQuotaName
 * @property int $Used
 * @property int $Max
 */
class AccountQuota extends Shape
{
    /**
     * @param array{
     *     AccountQuotaName?: string,
     *     Used?: int,
     *     Max?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
