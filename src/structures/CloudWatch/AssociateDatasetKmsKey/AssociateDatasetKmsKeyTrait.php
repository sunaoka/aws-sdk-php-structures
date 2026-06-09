<?php

namespace Sunaoka\Aws\Structures\CloudWatch\AssociateDatasetKmsKey;

trait AssociateDatasetKmsKeyTrait
{
    /**
     * @param AssociateDatasetKmsKeyRequest $args
     * @return AssociateDatasetKmsKeyResponse
     */
    public function associateDatasetKmsKey(AssociateDatasetKmsKeyRequest $args)
    {
        $result = parent::associateDatasetKmsKey($args->toArray());
        return new AssociateDatasetKmsKeyResponse($result->toArray());
    }
}
