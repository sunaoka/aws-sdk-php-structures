<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteConfigurationRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
