<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IngressPointId
 * @property string $IngressPointName
 * @property string|null $IngressPointArn
 * @property 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED'|'ASSOCIATED_VPC_ENDPOINT_DOES_NOT_EXIST'|null $Status
 * @property 'OPEN'|'AUTH'|'MTLS'|null $Type
 * @property string|null $ARecord
 * @property string|null $RuleSetId
 * @property string|null $TrafficPolicyId
 * @property Shapes\IngressPointAuthConfiguration|null $IngressPointAuthConfiguration
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property 'REQUIRED'|'OPTIONAL'|'FIPS'|null $TlsPolicy
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class GetIngressPointResponse extends Response
{
}
