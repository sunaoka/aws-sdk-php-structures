<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateMatchmakingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ConfigurationArn
 * @property string|null $Description
 * @property list<string>|null $GameSessionQueueArns
 * @property int<1, 43200>|null $RequestTimeoutSeconds
 * @property int<1, 600>|null $AcceptanceTimeoutSeconds
 * @property bool|null $AcceptanceRequired
 * @property string|null $RuleSetName
 * @property string|null $RuleSetArn
 * @property string|null $NotificationTarget
 * @property int<0, max>|null $AdditionalPlayerCount
 * @property string|null $CustomEventData
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<GameProperty>|null $GameProperties
 * @property string|null $GameSessionData
 * @property 'AUTOMATIC'|'MANUAL'|null $BackfillMode
 * @property 'STANDALONE'|'WITH_QUEUE'|null $FlexMatchMode
 */
class MatchmakingConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ConfigurationArn?: string|null,
     *     Description?: string|null,
     *     GameSessionQueueArns?: list<string>|null,
     *     RequestTimeoutSeconds?: int<1, 43200>|null,
     *     AcceptanceTimeoutSeconds?: int<1, 600>|null,
     *     AcceptanceRequired?: bool|null,
     *     RuleSetName?: string|null,
     *     RuleSetArn?: string|null,
     *     NotificationTarget?: string|null,
     *     AdditionalPlayerCount?: int<0, max>|null,
     *     CustomEventData?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     GameProperties?: list<GameProperty>|null,
     *     GameSessionData?: string|null,
     *     BackfillMode?: 'AUTOMATIC'|'MANUAL'|null,
     *     FlexMatchMode?: 'STANDALONE'|'WITH_QUEUE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
