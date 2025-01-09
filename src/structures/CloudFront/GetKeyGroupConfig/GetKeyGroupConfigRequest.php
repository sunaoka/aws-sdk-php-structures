<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetKeyGroupConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetKeyGroupConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
