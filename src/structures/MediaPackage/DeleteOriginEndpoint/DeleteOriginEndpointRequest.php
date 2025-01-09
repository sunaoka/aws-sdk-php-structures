<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DeleteOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteOriginEndpointRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
