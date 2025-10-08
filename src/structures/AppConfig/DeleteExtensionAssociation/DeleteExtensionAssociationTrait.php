<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteExtensionAssociation;

trait DeleteExtensionAssociationTrait
{
    /**
     * @param DeleteExtensionAssociationRequest $args
     * @return void
     */
    public function deleteExtensionAssociation(DeleteExtensionAssociationRequest $args)
    {
        parent::deleteExtensionAssociation($args->toArray());
    }
}
