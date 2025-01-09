<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeletePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 */
class DeletePoolRequest extends Request
{
    /**
     * @param array{PoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
