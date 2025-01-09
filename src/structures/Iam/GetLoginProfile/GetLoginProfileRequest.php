<?php

namespace Sunaoka\Aws\Structures\Iam\GetLoginProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 */
class GetLoginProfileRequest extends Request
{
    /**
     * @param array{UserName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
