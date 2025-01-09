<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AccessKeyId
 */
class DeleteAccessKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     AccessKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
