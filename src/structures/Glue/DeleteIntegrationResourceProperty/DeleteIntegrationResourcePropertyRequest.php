<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteIntegrationResourceProperty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DeleteIntegrationResourcePropertyRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
