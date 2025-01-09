<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RemediationConfiguration> $RemediationConfigurations
 */
class PutRemediationConfigurationsRequest extends Request
{
    /**
     * @param array{RemediationConfigurations: list<Shapes\RemediationConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
