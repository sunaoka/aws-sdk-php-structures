<?php

namespace Sunaoka\Aws\Structures\IVS\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property 'NORMAL'|'LOW'|null $latencyMode
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null $type
 * @property bool|null $authorized
 * @property string|null $recordingConfigurationArn
 * @property array<string, string>|null $tags
 * @property bool|null $insecureIngest
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null $preset
 * @property string|null $playbackRestrictionPolicyArn
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     latencyMode?: 'NORMAL'|'LOW'|null,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null,
     *     authorized?: bool|null,
     *     recordingConfigurationArn?: string|null,
     *     tags?: array<string, string>|null,
     *     insecureIngest?: bool|null,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null,
     *     playbackRestrictionPolicyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
