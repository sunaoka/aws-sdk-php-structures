<?php

namespace Sunaoka\Aws\Structures\Glue\GetCustomEntityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetCustomEntityTypeRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
