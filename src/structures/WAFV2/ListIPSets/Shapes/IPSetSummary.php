<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListIPSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $Description
 * @property string|null $LockToken
 * @property string|null $ARN
 */
class IPSetSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     Description?: string|null,
     *     LockToken?: string|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
