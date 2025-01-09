<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
