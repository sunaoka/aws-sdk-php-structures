<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property bool|null $authorized
 * @property bool|null $insecureIngest
 * @property 'NORMAL'|'LOW'|null $latencyMode
 * @property string|null $name
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null $preset
 * @property string|null $recordingConfigurationArn
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null $type
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     authorized?: bool|null,
     *     insecureIngest?: bool|null,
     *     latencyMode?: 'NORMAL'|'LOW'|null,
     *     name?: string|null,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null,
     *     recordingConfigurationArn?: string|null,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
