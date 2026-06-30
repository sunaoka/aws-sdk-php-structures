<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\DeleteSupportPermit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $supportPermitIdentifier
 */
class DeleteSupportPermitRequest extends Request
{
    /**
     * @param array{supportPermitIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
