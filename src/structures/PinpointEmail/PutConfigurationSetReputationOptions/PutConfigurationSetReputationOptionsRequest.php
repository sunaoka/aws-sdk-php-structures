<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetReputationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property bool $ReputationMetricsEnabled
 */
class PutConfigurationSetReputationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     ReputationMetricsEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
