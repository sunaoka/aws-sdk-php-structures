<?php

namespace Sunaoka\Aws\Structures\Omics\PutS3AccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $s3AccessPointArn
 * @property string $s3AccessPolicy
 */
class PutS3AccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     s3AccessPointArn: string,
     *     s3AccessPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
