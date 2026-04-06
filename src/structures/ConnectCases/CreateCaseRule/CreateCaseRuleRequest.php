<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $name
 * @property string|null $description
 * @property Shapes\CaseRuleDetails $rule
 */
class CreateCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     description?: string|null,
     *     rule: Shapes\CaseRuleDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
