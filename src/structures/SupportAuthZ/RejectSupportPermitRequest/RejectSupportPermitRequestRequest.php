<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\RejectSupportPermitRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $requestArn
 */
class RejectSupportPermitRequestRequest extends Request
{
    /**
     * @param array{requestArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
