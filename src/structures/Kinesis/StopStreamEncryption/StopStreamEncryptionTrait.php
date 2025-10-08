<?php

namespace Sunaoka\Aws\Structures\Kinesis\StopStreamEncryption;

trait StopStreamEncryptionTrait
{
    /**
     * @param StopStreamEncryptionRequest $args
     * @return void
     */
    public function stopStreamEncryption(StopStreamEncryptionRequest $args)
    {
        parent::stopStreamEncryption($args->toArray());
    }
}
