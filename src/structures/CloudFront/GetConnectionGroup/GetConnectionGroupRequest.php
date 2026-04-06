<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetConnectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetConnectionGroupRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
