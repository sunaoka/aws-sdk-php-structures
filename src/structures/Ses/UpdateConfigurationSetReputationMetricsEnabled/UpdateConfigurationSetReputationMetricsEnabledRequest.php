<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetReputationMetricsEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property bool $Enabled
 */
class UpdateConfigurationSetReputationMetricsEnabledRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
