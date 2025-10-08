<?php

namespace Sunaoka\Aws\Structures\signer\RevokeSignature;

trait RevokeSignatureTrait
{
    /**
     * @param RevokeSignatureRequest $args
     * @return void
     */
    public function revokeSignature(RevokeSignatureRequest $args)
    {
        parent::revokeSignature($args->toArray());
    }
}
