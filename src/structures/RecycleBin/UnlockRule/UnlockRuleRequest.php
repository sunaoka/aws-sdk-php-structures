<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UnlockRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class UnlockRuleRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
