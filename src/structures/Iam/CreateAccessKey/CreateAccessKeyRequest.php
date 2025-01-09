<?php

namespace Sunaoka\Aws\Structures\Iam\CreateAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 */
class CreateAccessKeyRequest extends Request
{
    /**
     * @param array{UserName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
