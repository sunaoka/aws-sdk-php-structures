<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachTypedLink;

trait DetachTypedLinkTrait
{
    /**
     * @param DetachTypedLinkRequest $args
     * @return void
     */
    public function detachTypedLink(DetachTypedLinkRequest $args)
    {
        parent::detachTypedLink($args->toArray());
    }
}
