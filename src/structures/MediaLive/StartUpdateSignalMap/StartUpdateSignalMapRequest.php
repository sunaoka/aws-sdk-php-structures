<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartUpdateSignalMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CloudWatchAlarmTemplateGroupIdentifiers
 * @property string $Description
 * @property string $DiscoveryEntryPointArn
 * @property list<string> $EventBridgeRuleTemplateGroupIdentifiers
 * @property bool $ForceRediscovery
 * @property string $Identifier
 * @property string $Name
 */
class StartUpdateSignalMapRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifiers?: list<string>,
     *     Description?: string,
     *     DiscoveryEntryPointArn?: string,
     *     EventBridgeRuleTemplateGroupIdentifiers?: list<string>,
     *     ForceRediscovery?: bool,
     *     Identifier: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
