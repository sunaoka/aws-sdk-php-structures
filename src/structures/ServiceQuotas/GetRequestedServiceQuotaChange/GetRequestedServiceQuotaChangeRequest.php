<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetRequestedServiceQuotaChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequestId
 */
class GetRequestedServiceQuotaChangeRequest extends Request
{
    /**
     * @param array{RequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
