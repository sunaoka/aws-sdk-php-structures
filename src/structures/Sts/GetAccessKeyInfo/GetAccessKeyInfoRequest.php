<?php

namespace Sunaoka\Aws\Structures\Sts\GetAccessKeyInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessKeyId
 */
class GetAccessKeyInfoRequest extends Request
{
    /**
     * @param array{AccessKeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
