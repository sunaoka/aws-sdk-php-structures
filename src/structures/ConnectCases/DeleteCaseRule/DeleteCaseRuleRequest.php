<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseRuleId
 */
class DeleteCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseRuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
