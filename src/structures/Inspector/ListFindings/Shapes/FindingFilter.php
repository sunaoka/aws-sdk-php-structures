<?php

namespace Sunaoka\Aws\Structures\Inspector\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $agentIds
 * @property list<string>|null $autoScalingGroups
 * @property list<string>|null $ruleNames
 * @property list<'Low'|'Medium'|'High'|'Informational'|'Undefined'>|null $severities
 * @property list<string>|null $rulesPackageArns
 * @property list<Attribute>|null $attributes
 * @property list<Attribute>|null $userAttributes
 * @property TimestampRange|null $creationTimeRange
 */
class FindingFilter extends Shape
{
    /**
     * @param array{
     *     agentIds?: list<string>|null,
     *     autoScalingGroups?: list<string>|null,
     *     ruleNames?: list<string>|null,
     *     severities?: list<'Low'|'Medium'|'High'|'Informational'|'Undefined'>|null,
     *     rulesPackageArns?: list<string>|null,
     *     attributes?: list<Attribute>|null,
     *     userAttributes?: list<Attribute>|null,
     *     creationTimeRange?: TimestampRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
