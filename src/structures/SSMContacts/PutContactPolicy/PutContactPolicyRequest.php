<?php

namespace Sunaoka\Aws\Structures\SSMContacts\PutContactPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 * @property string $Policy
 */
class PutContactPolicyRequest extends Request
{
    /**
     * @param array{
     *     ContactArn: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
