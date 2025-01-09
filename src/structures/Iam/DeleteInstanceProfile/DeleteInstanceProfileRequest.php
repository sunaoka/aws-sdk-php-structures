<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 */
class DeleteInstanceProfileRequest extends Request
{
    /**
     * @param array{InstanceProfileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
