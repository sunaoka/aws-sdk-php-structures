<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteCustomEntityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteCustomEntityTypeRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
