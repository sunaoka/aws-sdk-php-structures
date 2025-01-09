<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteListRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
