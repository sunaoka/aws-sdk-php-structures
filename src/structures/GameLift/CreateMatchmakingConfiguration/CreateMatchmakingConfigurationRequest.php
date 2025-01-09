<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateMatchmakingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property list<string> $GameSessionQueueArns
 * @property int $RequestTimeoutSeconds
 * @property int $AcceptanceTimeoutSeconds
 * @property bool $AcceptanceRequired
 * @property string $RuleSetName
 * @property string $NotificationTarget
 * @property int $AdditionalPlayerCount
 * @property string $CustomEventData
 * @property list<Shapes\GameProperty> $GameProperties
 * @property string $GameSessionData
 * @property 'AUTOMATIC'|'MANUAL' $BackfillMode
 * @property 'STANDALONE'|'WITH_QUEUE' $FlexMatchMode
 * @property list<Shapes\Tag> $Tags
 */
class CreateMatchmakingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     GameSessionQueueArns?: list<string>,
     *     RequestTimeoutSeconds: int,
     *     AcceptanceTimeoutSeconds?: int,
     *     AcceptanceRequired: bool,
     *     RuleSetName: string,
     *     NotificationTarget?: string,
     *     AdditionalPlayerCount?: int,
     *     CustomEventData?: string,
     *     GameProperties?: list<Shapes\GameProperty>,
     *     GameSessionData?: string,
     *     BackfillMode?: 'AUTOMATIC'|'MANUAL',
     *     FlexMatchMode?: 'STANDALONE'|'WITH_QUEUE',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
