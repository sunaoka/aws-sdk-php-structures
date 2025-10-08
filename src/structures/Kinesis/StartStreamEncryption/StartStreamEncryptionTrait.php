<?php

namespace Sunaoka\Aws\Structures\Kinesis\StartStreamEncryption;

trait StartStreamEncryptionTrait
{
    /**
     * @param StartStreamEncryptionRequest $args
     * @return void
     */
    public function startStreamEncryption(StartStreamEncryptionRequest $args)
    {
        parent::startStreamEncryption($args->toArray());
    }
}
