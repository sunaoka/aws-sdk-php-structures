<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetId
 */
class DeleteRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
