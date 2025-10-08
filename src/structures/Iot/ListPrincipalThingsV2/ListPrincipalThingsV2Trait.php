<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThingsV2;

trait ListPrincipalThingsV2Trait
{
    /**
     * @param ListPrincipalThingsV2Request $args
     * @return ListPrincipalThingsV2Response
     */
    public function listPrincipalThingsV2(ListPrincipalThingsV2Request $args)
    {
        $result = parent::listPrincipalThingsV2($args->toArray());
        return new ListPrincipalThingsV2Response($result->toArray());
    }
}
