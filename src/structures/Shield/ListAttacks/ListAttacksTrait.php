<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks;

trait ListAttacksTrait
{
    /**
     * @param ListAttacksRequest $args
     * @return ListAttacksResponse
     */
    public function listAttacks(ListAttacksRequest $args)
    {
        $result = parent::listAttacks($args->toArray());
        return new ListAttacksResponse($result->toArray());
    }
}
