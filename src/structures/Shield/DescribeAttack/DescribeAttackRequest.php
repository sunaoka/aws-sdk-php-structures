<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttackId
 */
class DescribeAttackRequest extends Request
{
    /**
     * @param array{AttackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
