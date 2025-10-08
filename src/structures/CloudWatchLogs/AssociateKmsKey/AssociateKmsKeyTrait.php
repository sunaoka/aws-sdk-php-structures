<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\AssociateKmsKey;

trait AssociateKmsKeyTrait
{
    /**
     * @param AssociateKmsKeyRequest $args
     * @return void
     */
    public function associateKmsKey(AssociateKmsKeyRequest $args)
    {
        parent::associateKmsKey($args->toArray());
    }
}
