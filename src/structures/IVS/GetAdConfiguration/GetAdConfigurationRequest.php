<?php

namespace Sunaoka\Aws\Structures\IVS\GetAdConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetAdConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
