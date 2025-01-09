<?php

namespace Sunaoka\Aws\Structures\Iam\GetInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 */
class GetInstanceProfileRequest extends Request
{
    /**
     * @param array{InstanceProfileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
