<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicsV2;

trait ListTopicsV2Trait
{
    /**
     * @param ListTopicsV2Request $args
     * @return ListTopicsV2Response
     */
    public function listTopicsV2(ListTopicsV2Request $args)
    {
        $result = parent::listTopicsV2($args->toArray());
        return new ListTopicsV2Response($result->toArray());
    }
}
