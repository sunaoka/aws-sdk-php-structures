<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transformerId
 */
class GetTransformerRequest extends Request
{
    /**
     * @param array{transformerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
