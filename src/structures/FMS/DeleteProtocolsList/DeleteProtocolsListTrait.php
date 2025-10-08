<?php

namespace Sunaoka\Aws\Structures\FMS\DeleteProtocolsList;

trait DeleteProtocolsListTrait
{
    /**
     * @param DeleteProtocolsListRequest $args
     * @return void
     */
    public function deleteProtocolsList(DeleteProtocolsListRequest $args)
    {
        parent::deleteProtocolsList($args->toArray());
    }
}
