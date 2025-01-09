<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyDocument
 * @property string $ResourceArn
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyDocument: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
