<?php

namespace Sunaoka\Aws\Structures\AppConfigData\StartConfigurationSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $EnvironmentIdentifier
 * @property string $ConfigurationProfileIdentifier
 * @property int<15, 86400> $RequiredMinimumPollIntervalInSeconds
 */
class StartConfigurationSessionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     EnvironmentIdentifier: string,
     *     ConfigurationProfileIdentifier: string,
     *     RequiredMinimumPollIntervalInSeconds?: int<15, 86400>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
