<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $PolicyId
 * @property string $PolicyHash
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     PolicyId: string,
     *     PolicyHash: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
