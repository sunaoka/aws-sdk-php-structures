<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartUpdateSignalMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CloudWatchAlarmTemplateGroupIdentifiers
 * @property string|null $Description
 * @property string|null $DiscoveryEntryPointArn
 * @property list<string>|null $EventBridgeRuleTemplateGroupIdentifiers
 * @property bool|null $ForceRediscovery
 * @property string $Identifier
 * @property string|null $Name
 */
class StartUpdateSignalMapRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifiers?: list<string>|null,
     *     Description?: string|null,
     *     DiscoveryEntryPointArn?: string|null,
     *     EventBridgeRuleTemplateGroupIdentifiers?: list<string>|null,
     *     ForceRediscovery?: bool|null,
     *     Identifier: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
