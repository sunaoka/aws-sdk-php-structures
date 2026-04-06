<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserProficiencies;

trait UpdateUserProficienciesTrait
{
    /**
     * @param UpdateUserProficienciesRequest $args
     * @return void
     */
    public function updateUserProficiencies(UpdateUserProficienciesRequest $args)
    {
        parent::updateUserProficiencies($args->toArray());
    }
}
