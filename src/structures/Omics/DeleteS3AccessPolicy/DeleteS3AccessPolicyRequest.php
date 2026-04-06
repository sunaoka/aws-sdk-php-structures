<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteS3AccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $s3AccessPointArn
 */
class DeleteS3AccessPolicyRequest extends Request
{
    /**
     * @param array{s3AccessPointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
