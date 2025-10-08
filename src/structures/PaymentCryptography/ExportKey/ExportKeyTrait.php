<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ExportKey;

trait ExportKeyTrait
{
    /**
     * @param ExportKeyRequest $args
     * @return ExportKeyResponse
     */
    public function exportKey(ExportKeyRequest $args)
    {
        $result = parent::exportKey($args->toArray());
        return new ExportKeyResponse($result->toArray());
    }
}
