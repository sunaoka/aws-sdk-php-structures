<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContactPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 */
class GetContactPolicyRequest extends Request
{
    /**
     * @param array{ContactArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
