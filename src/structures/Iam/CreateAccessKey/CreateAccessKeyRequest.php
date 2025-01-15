<?php

namespace Sunaoka\Aws\Structures\Iam\CreateAccessKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 */
class CreateAccessKeyRequest extends Request
{
    /**
     * @param array{UserName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
