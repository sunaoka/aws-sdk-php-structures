<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteEmailIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 */
class DeleteEmailIdentityRequest extends Request
{
    /**
     * @param array{EmailIdentity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
