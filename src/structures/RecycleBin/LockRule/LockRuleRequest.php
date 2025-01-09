<?php

namespace Sunaoka\Aws\Structures\RecycleBin\LockRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\LockConfiguration $LockConfiguration
 */
class LockRuleRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     LockConfiguration: Shapes\LockConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
