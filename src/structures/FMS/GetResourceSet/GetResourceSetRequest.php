<?php

namespace Sunaoka\Aws\Structures\FMS\GetResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetResourceSetRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
