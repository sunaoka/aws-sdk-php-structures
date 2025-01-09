<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteBaiduChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class DeleteBaiduChannelRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
