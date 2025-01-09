<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationResourceProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetIntegrationResourcePropertyRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
