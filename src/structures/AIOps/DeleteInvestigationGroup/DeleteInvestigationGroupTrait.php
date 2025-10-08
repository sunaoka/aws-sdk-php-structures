<?php

namespace Sunaoka\Aws\Structures\AIOps\DeleteInvestigationGroup;

trait DeleteInvestigationGroupTrait
{
    /**
     * @param DeleteInvestigationGroupRequest $args
     * @return void
     */
    public function deleteInvestigationGroup(DeleteInvestigationGroupRequest $args)
    {
        parent::deleteInvestigationGroup($args->toArray());
    }
}
