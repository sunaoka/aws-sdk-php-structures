<?php

namespace Sunaoka\Aws\Structures\Inspector\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $agentIds
 * @property list<string> $autoScalingGroups
 * @property list<string> $ruleNames
 * @property list<'Low'|'Medium'|'High'|'Informational'|'Undefined'> $severities
 * @property list<string> $rulesPackageArns
 * @property list<Attribute> $attributes
 * @property list<Attribute> $userAttributes
 * @property TimestampRange $creationTimeRange
 */
class FindingFilter extends Shape
{
    /**
     * @param array{
     *     agentIds?: list<string>,
     *     autoScalingGroups?: list<string>,
     *     ruleNames?: list<string>,
     *     severities?: list<'Low'|'Medium'|'High'|'Informational'|'Undefined'>,
     *     rulesPackageArns?: list<string>,
     *     attributes?: list<Attribute>,
     *     userAttributes?: list<Attribute>,
     *     creationTimeRange?: TimestampRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
