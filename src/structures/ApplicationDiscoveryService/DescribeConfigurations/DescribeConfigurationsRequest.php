<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $configurationIds
 */
class DescribeConfigurationsRequest extends Request
{
    /**
     * @param array{configurationIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
