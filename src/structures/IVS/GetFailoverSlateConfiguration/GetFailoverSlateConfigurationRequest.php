<?php

namespace Sunaoka\Aws\Structures\IVS\GetFailoverSlateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetFailoverSlateConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
