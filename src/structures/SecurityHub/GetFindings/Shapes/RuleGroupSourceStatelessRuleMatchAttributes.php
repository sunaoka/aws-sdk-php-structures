<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesDestinationPorts>|null $DestinationPorts
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesDestinations>|null $Destinations
 * @property list<int>|null $Protocols
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesSourcePorts>|null $SourcePorts
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesSources>|null $Sources
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesTcpFlags>|null $TcpFlags
 */
class RuleGroupSourceStatelessRuleMatchAttributes extends Shape
{
    /**
     * @param array{
     *     DestinationPorts?: list<RuleGroupSourceStatelessRuleMatchAttributesDestinationPorts>|null,
     *     Destinations?: list<RuleGroupSourceStatelessRuleMatchAttributesDestinations>|null,
     *     Protocols?: list<int>|null,
     *     SourcePorts?: list<RuleGroupSourceStatelessRuleMatchAttributesSourcePorts>|null,
     *     Sources?: list<RuleGroupSourceStatelessRuleMatchAttributesSources>|null,
     *     TcpFlags?: list<RuleGroupSourceStatelessRuleMatchAttributesTcpFlags>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
