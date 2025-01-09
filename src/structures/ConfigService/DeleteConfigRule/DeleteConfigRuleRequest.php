<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 */
class DeleteConfigRuleRequest extends Request
{
    /**
     * @param array{ConfigRuleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
