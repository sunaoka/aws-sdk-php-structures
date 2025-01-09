<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccessKeyLastUsed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessKeyId
 */
class GetAccessKeyLastUsedRequest extends Request
{
    /**
     * @param array{AccessKeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
