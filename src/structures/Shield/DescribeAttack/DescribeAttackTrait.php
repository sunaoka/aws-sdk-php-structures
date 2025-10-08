<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack;

trait DescribeAttackTrait
{
    /**
     * @param DescribeAttackRequest $args
     * @return DescribeAttackResponse
     */
    public function describeAttack(DescribeAttackRequest $args)
    {
        $result = parent::describeAttack($args->toArray());
        return new DescribeAttackResponse($result->toArray());
    }
}
