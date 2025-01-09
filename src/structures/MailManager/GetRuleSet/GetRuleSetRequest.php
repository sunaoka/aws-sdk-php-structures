<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleSetId
 */
class GetRuleSetRequest extends Request
{
    /**
     * @param array{RuleSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
