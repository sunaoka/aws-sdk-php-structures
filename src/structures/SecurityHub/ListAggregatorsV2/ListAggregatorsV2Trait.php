<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAggregatorsV2;

trait ListAggregatorsV2Trait
{
    /**
     * @param ListAggregatorsV2Request $args
     * @return ListAggregatorsV2Response
     */
    public function listAggregatorsV2(ListAggregatorsV2Request $args)
    {
        $result = parent::listAggregatorsV2($args->toArray());
        return new ListAggregatorsV2Response($result->toArray());
    }
}
