<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ARecord
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property string $IngressPointArn
 * @property Shapes\IngressPointAuthConfiguration $IngressPointAuthConfiguration
 * @property string $IngressPointId
 * @property string $IngressPointName
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property string $RuleSetId
 * @property 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED' $Status
 * @property string $TrafficPolicyId
 * @property 'OPEN'|'AUTH' $Type
 */
class GetIngressPointResponse extends Response
{
}
