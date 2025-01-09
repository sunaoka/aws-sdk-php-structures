<?php

namespace Sunaoka\Aws\Structures\Sns\GetPlatformApplicationAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformApplicationArn
 */
class GetPlatformApplicationAttributesRequest extends Request
{
    /**
     * @param array{PlatformApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
