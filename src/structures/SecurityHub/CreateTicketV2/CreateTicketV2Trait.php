<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateTicketV2;

trait CreateTicketV2Trait
{
    /**
     * @param CreateTicketV2Request $args
     * @return CreateTicketV2Response
     */
    public function createTicketV2(CreateTicketV2Request $args)
    {
        $result = parent::createTicketV2($args->toArray());
        return new CreateTicketV2Response($result->toArray());
    }
}
