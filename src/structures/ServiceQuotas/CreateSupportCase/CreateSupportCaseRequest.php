<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\CreateSupportCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequestId
 */
class CreateSupportCaseRequest extends Request
{
    /**
     * @param array{RequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
