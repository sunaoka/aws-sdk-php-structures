<?php

namespace Sunaoka\Aws\Structures\DataExchange\DeleteDataGrant;

trait DeleteDataGrantTrait
{
    /**
     * @param DeleteDataGrantRequest $args
     * @return void
     */
    public function deleteDataGrant(DeleteDataGrantRequest $args)
    {
        parent::deleteDataGrant($args->toArray());
    }
}
