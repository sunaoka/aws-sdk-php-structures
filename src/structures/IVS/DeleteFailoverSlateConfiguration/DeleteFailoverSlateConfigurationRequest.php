<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteFailoverSlateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteFailoverSlateConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
