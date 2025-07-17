<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrafficPolicyName
 * @property string $TrafficPolicyId
 * @property string|null $TrafficPolicyArn
 * @property list<Shapes\PolicyStatement>|null $PolicyStatements
 * @property int<1, max>|null $MaxMessageSizeBytes
 * @property 'ALLOW'|'DENY'|null $DefaultAction
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class GetTrafficPolicyResponse extends Response
{
}
