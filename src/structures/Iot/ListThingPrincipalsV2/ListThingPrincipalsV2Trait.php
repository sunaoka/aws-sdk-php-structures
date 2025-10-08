<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingPrincipalsV2;

trait ListThingPrincipalsV2Trait
{
    /**
     * @param ListThingPrincipalsV2Request $args
     * @return ListThingPrincipalsV2Response
     */
    public function listThingPrincipalsV2(ListThingPrincipalsV2Request $args)
    {
        $result = parent::listThingPrincipalsV2($args->toArray());
        return new ListThingPrincipalsV2Response($result->toArray());
    }
}
