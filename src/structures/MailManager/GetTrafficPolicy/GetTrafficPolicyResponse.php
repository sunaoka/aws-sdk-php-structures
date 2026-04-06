<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property 'ALLOW'|'DENY'|null $DefaultAction
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property int<1, max>|null $MaxMessageSizeBytes
 * @property list<Shapes\PolicyStatement>|null $PolicyStatements
 * @property string|null $TrafficPolicyArn
 * @property string $TrafficPolicyId
 * @property string $TrafficPolicyName
 */
class GetTrafficPolicyResponse extends Response
{
}
