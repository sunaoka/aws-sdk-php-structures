<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetPublicKeyConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetPublicKeyConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
