<?php

namespace Sunaoka\Aws\Structures\RecycleBin\DeleteRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteRuleRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
