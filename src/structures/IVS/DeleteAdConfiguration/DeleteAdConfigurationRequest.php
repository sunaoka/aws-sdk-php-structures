<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteAdConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteAdConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
