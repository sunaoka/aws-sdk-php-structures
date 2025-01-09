<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteClassifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteClassifierRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
