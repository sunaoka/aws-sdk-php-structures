<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteHostKey;

trait DeleteHostKeyTrait
{
    /**
     * @param DeleteHostKeyRequest $args
     * @return void
     */
    public function deleteHostKey(DeleteHostKeyRequest $args)
    {
        parent::deleteHostKey($args->toArray());
    }
}
