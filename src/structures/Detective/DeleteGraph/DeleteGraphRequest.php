<?php

namespace Sunaoka\Aws\Structures\Detective\DeleteGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 */
class DeleteGraphRequest extends Request
{
    /**
     * @param array{GraphArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
