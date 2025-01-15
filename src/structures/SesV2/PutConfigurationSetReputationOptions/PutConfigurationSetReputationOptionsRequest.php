<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetReputationOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property bool|null $ReputationMetricsEnabled
 */
class PutConfigurationSetReputationOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     ReputationMetricsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
