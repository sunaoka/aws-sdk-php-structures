<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AccessKeyId
 * @property 'Active'|'Inactive' $Status
 */
class UpdateAccessKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     AccessKeyId: string,
     *     Status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
