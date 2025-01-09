<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateIPSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $Description
 * @property string $LockToken
 * @property string $ARN
 */
class IPSetSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     Description?: string,
     *     LockToken?: string,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
