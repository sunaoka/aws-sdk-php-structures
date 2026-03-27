<?php

namespace Sunaoka\Aws\Structures\Omics\GetConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetConfigurationRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
