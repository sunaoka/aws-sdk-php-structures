<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountQuotaName
 * @property int|null $Used
 * @property int|null $Max
 */
class AccountQuota extends Shape
{
    /**
     * @param array{
     *     AccountQuotaName?: string|null,
     *     Used?: int|null,
     *     Max?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
