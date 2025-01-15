<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRuleEvaluationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigRuleNames
 * @property string|null $NextToken
 * @property int<0, 50>|null $Limit
 */
class DescribeConfigRuleEvaluationStatusRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
