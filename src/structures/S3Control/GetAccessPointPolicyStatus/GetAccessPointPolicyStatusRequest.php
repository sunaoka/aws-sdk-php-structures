<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointPolicyStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 */
class GetAccessPointPolicyStatusRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
