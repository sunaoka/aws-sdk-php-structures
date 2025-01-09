<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConfigRuleNames
 */
class DescribeRemediationConfigurationsRequest extends Request
{
    /**
     * @param array{ConfigRuleNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
