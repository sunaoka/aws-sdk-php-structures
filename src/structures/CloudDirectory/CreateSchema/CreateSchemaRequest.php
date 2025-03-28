<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class CreateSchemaRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
