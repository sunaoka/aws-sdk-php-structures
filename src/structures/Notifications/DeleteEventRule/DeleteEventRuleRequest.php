<?php

namespace Sunaoka\Aws\Structures\Notifications\DeleteEventRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteEventRuleRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
