<?php

namespace Sunaoka\Aws\Structures\B2bi\DeleteTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transformerId
 */
class DeleteTransformerRequest extends Request
{
    /**
     * @param array{transformerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
