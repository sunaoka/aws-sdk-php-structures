<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteVerifiedEmailAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 */
class DeleteVerifiedEmailAddressRequest extends Request
{
    /**
     * @param array{EmailAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
