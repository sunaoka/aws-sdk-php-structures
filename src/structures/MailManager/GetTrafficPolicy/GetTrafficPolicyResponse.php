<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property 'ALLOW'|'DENY' $DefaultAction
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property int<1, max> $MaxMessageSizeBytes
 * @property list<Shapes\PolicyStatement> $PolicyStatements
 * @property string $TrafficPolicyArn
 * @property string $TrafficPolicyId
 * @property string $TrafficPolicyName
 */
class GetTrafficPolicyResponse extends Response
{
}
