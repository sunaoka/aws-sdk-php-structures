<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteInstanceProfileRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
