<?php

namespace Sunaoka\Aws\Structures\FMS\DeleteResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteResourceSetRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
