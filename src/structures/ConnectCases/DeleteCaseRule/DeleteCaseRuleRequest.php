<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseRuleId
 * @property string $domainId
 */
class DeleteCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     caseRuleId: string,
     *     domainId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
