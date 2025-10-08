<?php

namespace Sunaoka\Aws\Structures\Efs\PutBackupPolicy;

trait PutBackupPolicyTrait
{
    /**
     * @param PutBackupPolicyRequest $args
     * @return PutBackupPolicyResponse
     */
    public function putBackupPolicy(PutBackupPolicyRequest $args)
    {
        $result = parent::putBackupPolicy($args->toArray());
        return new PutBackupPolicyResponse($result->toArray());
    }
}
