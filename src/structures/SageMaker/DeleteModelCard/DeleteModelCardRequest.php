<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelCard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 */
class DeleteModelCardRequest extends Request
{
    /**
     * @param array{ModelCardName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
