<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesDestinationPorts> $DestinationPorts
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesDestinations> $Destinations
 * @property list<int> $Protocols
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesSourcePorts> $SourcePorts
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesSources> $Sources
 * @property list<RuleGroupSourceStatelessRuleMatchAttributesTcpFlags> $TcpFlags
 */
class RuleGroupSourceStatelessRuleMatchAttributes extends Shape
{
    /**
     * @param array{
     *     DestinationPorts?: list<RuleGroupSourceStatelessRuleMatchAttributesDestinationPorts>,
     *     Destinations?: list<RuleGroupSourceStatelessRuleMatchAttributesDestinations>,
     *     Protocols?: list<int>,
     *     SourcePorts?: list<RuleGroupSourceStatelessRuleMatchAttributesSourcePorts>,
     *     Sources?: list<RuleGroupSourceStatelessRuleMatchAttributesSources>,
     *     TcpFlags?: list<RuleGroupSourceStatelessRuleMatchAttributesTcpFlags>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
