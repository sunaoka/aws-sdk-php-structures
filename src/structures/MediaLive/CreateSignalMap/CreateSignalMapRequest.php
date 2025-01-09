<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateSignalMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CloudWatchAlarmTemplateGroupIdentifiers
 * @property string $Description
 * @property string $DiscoveryEntryPointArn
 * @property list<string> $EventBridgeRuleTemplateGroupIdentifiers
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateSignalMapRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifiers?: list<string>,
     *     Description?: string,
     *     DiscoveryEntryPointArn: string,
     *     EventBridgeRuleTemplateGroupIdentifiers?: list<string>,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
