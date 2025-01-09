<?php

namespace Sunaoka\Aws\Structures\RecycleBin\GetRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetRuleRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
