<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $AccessKeyId
 * @property 'Active'|'Inactive'|'Expired' $Status
 */
class UpdateAccessKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     AccessKeyId: string,
     *     Status: 'Active'|'Inactive'|'Expired'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
