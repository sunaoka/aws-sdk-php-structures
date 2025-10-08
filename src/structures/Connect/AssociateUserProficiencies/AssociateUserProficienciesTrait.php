<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateUserProficiencies;

trait AssociateUserProficienciesTrait
{
    /**
     * @param AssociateUserProficienciesRequest $args
     * @return void
     */
    public function associateUserProficiencies(AssociateUserProficienciesRequest $args)
    {
        parent::associateUserProficiencies($args->toArray());
    }
}
