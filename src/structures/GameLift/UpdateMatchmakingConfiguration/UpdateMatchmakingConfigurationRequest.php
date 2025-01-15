<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateMatchmakingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<string>|null $GameSessionQueueArns
 * @property int<1, 43200>|null $RequestTimeoutSeconds
 * @property int<1, 600>|null $AcceptanceTimeoutSeconds
 * @property bool|null $AcceptanceRequired
 * @property string|null $RuleSetName
 * @property string|null $NotificationTarget
 * @property int<0, max>|null $AdditionalPlayerCount
 * @property string|null $CustomEventData
 * @property list<Shapes\GameProperty>|null $GameProperties
 * @property string|null $GameSessionData
 * @property 'AUTOMATIC'|'MANUAL'|null $BackfillMode
 * @property 'STANDALONE'|'WITH_QUEUE'|null $FlexMatchMode
 */
class UpdateMatchmakingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     GameSessionQueueArns?: list<string>|null,
     *     RequestTimeoutSeconds?: int<1, 43200>|null,
     *     AcceptanceTimeoutSeconds?: int<1, 600>|null,
     *     AcceptanceRequired?: bool|null,
     *     RuleSetName?: string|null,
     *     NotificationTarget?: string|null,
     *     AdditionalPlayerCount?: int<0, max>|null,
     *     CustomEventData?: string|null,
     *     GameProperties?: list<Shapes\GameProperty>|null,
     *     GameSessionData?: string|null,
     *     BackfillMode?: 'AUTOMATIC'|'MANUAL'|null,
     *     FlexMatchMode?: 'STANDALONE'|'WITH_QUEUE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
