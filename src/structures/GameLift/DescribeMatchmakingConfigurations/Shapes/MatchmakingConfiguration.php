<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConfigurationArn
 * @property string $Description
 * @property list<string> $GameSessionQueueArns
 * @property int<1, 43200> $RequestTimeoutSeconds
 * @property int<1, 600> $AcceptanceTimeoutSeconds
 * @property bool $AcceptanceRequired
 * @property string $RuleSetName
 * @property string $RuleSetArn
 * @property string $NotificationTarget
 * @property int<0, max> $AdditionalPlayerCount
 * @property string $CustomEventData
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<GameProperty> $GameProperties
 * @property string $GameSessionData
 * @property 'AUTOMATIC'|'MANUAL' $BackfillMode
 * @property 'STANDALONE'|'WITH_QUEUE' $FlexMatchMode
 */
class MatchmakingConfiguration extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ConfigurationArn?: string,
     *     Description?: string,
     *     GameSessionQueueArns?: list<string>,
     *     RequestTimeoutSeconds?: int<1, 43200>,
     *     AcceptanceTimeoutSeconds?: int<1, 600>,
     *     AcceptanceRequired?: bool,
     *     RuleSetName?: string,
     *     RuleSetArn?: string,
     *     NotificationTarget?: string,
     *     AdditionalPlayerCount?: int<0, max>,
     *     CustomEventData?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     GameProperties?: list<GameProperty>,
     *     GameSessionData?: string,
     *     BackfillMode?: 'AUTOMATIC'|'MANUAL',
     *     FlexMatchMode?: 'STANDALONE'|'WITH_QUEUE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
