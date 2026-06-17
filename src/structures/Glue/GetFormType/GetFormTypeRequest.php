<?php

namespace Sunaoka\Aws\Structures\Glue\GetFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetFormTypeRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
