<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\GetSupportPermit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $supportPermitIdentifier
 */
class GetSupportPermitRequest extends Request
{
    /**
     * @param array{supportPermitIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
