<?php

namespace Sunaoka\Aws\Structures\Sns\DeletePlatformApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformApplicationArn
 */
class DeletePlatformApplicationRequest extends Request
{
    /**
     * @param array{PlatformApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
