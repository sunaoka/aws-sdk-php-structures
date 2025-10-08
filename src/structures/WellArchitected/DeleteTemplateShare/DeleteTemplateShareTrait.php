<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteTemplateShare;

trait DeleteTemplateShareTrait
{
    /**
     * @param DeleteTemplateShareRequest $args
     * @return void
     */
    public function deleteTemplateShare(DeleteTemplateShareRequest $args)
    {
        parent::deleteTemplateShare($args->toArray());
    }
}
