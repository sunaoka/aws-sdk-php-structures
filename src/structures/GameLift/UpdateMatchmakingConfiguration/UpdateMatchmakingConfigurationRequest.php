<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateMatchmakingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property list<string> $GameSessionQueueArns
 * @property int<1, 43200> $RequestTimeoutSeconds
 * @property int<1, 600> $AcceptanceTimeoutSeconds
 * @property bool $AcceptanceRequired
 * @property string $RuleSetName
 * @property string $NotificationTarget
 * @property int<0, max> $AdditionalPlayerCount
 * @property string $CustomEventData
 * @property list<Shapes\GameProperty> $GameProperties
 * @property string $GameSessionData
 * @property 'AUTOMATIC'|'MANUAL' $BackfillMode
 * @property 'STANDALONE'|'WITH_QUEUE' $FlexMatchMode
 */
class UpdateMatchmakingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     GameSessionQueueArns?: list<string>,
     *     RequestTimeoutSeconds?: int<1, 43200>,
     *     AcceptanceTimeoutSeconds?: int<1, 600>,
     *     AcceptanceRequired?: bool,
     *     RuleSetName?: string,
     *     NotificationTarget?: string,
     *     AdditionalPlayerCount?: int<0, max>,
     *     CustomEventData?: string,
     *     GameProperties?: list<Shapes\GameProperty>,
     *     GameSessionData?: string,
     *     BackfillMode?: 'AUTOMATIC'|'MANUAL',
     *     FlexMatchMode?: 'STANDALONE'|'WITH_QUEUE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
