<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetInstanceProfileRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
