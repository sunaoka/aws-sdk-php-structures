<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $AccessGrantId
 */
class DeleteAccessGrantRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     AccessGrantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
