<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\RevokeResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class RevokeResourceRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
