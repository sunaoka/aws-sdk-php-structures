<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateSignalMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CloudWatchAlarmTemplateGroupIdentifiers
 * @property string|null $Description
 * @property string $DiscoveryEntryPointArn
 * @property list<string>|null $EventBridgeRuleTemplateGroupIdentifiers
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property string|null $RequestId
 */
class CreateSignalMapRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifiers?: list<string>|null,
     *     Description?: string|null,
     *     DiscoveryEntryPointArn: string,
     *     EventBridgeRuleTemplateGroupIdentifiers?: list<string>|null,
     *     Name: string,
     *     Tags?: array<string, string>|null,
     *     RequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
