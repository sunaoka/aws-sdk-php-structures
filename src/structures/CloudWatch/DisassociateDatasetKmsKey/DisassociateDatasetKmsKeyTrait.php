<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisassociateDatasetKmsKey;

trait DisassociateDatasetKmsKeyTrait
{
    /**
     * @param DisassociateDatasetKmsKeyRequest $args
     * @return DisassociateDatasetKmsKeyResponse
     */
    public function disassociateDatasetKmsKey(DisassociateDatasetKmsKeyRequest $args)
    {
        $result = parent::disassociateDatasetKmsKey($args->toArray());
        return new DisassociateDatasetKmsKeyResponse($result->toArray());
    }
}
