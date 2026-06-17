<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteFormTypeRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
