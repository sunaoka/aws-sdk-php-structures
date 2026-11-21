<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreatePortalPreview;

trait CreatePortalPreviewTrait
{
    /**
     * @param CreatePortalPreviewRequest $args
     * @return void
     */
    public function createPortalPreview(CreatePortalPreviewRequest $args)
    {
        parent::createPortalPreview($args->toArray());
    }
}
