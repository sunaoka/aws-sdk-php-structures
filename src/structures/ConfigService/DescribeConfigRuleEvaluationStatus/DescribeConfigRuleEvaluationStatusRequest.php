<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRuleEvaluationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigRuleNames
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeConfigRuleEvaluationStatusRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleNames?: list<string>,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
