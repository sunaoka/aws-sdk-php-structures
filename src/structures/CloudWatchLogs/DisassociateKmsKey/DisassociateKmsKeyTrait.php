<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DisassociateKmsKey;

trait DisassociateKmsKeyTrait
{
    /**
     * @param DisassociateKmsKeyRequest $args
     * @return void
     */
    public function disassociateKmsKey(DisassociateKmsKeyRequest $args)
    {
        parent::disassociateKmsKey($args->toArray());
    }
}
