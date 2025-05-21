<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainId
 * @property string $name
 * @property Shapes\CaseRuleDetails $rule
 */
class CreateCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainId: string,
     *     name: string,
     *     rule: Shapes\CaseRuleDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
