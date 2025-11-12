<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetMembership;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $membershipId
 * @property string|null $accountId
 * @property 'af-south-1'|'ap-east-1'|'ap-east-2'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'ap-south-1'|'ap-south-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-southeast-4'|'ap-southeast-5'|'ap-southeast-6'|'ap-southeast-7'|'ca-central-1'|'ca-west-1'|'cn-north-1'|'cn-northwest-1'|'eu-central-1'|'eu-central-2'|'eu-north-1'|'eu-south-1'|'eu-south-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'il-central-1'|'me-central-1'|'me-south-1'|'mx-central-1'|'sa-east-1'|'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|null $region
 * @property string|null $membershipName
 * @property string|null $membershipArn
 * @property 'Active'|'Cancelled'|'Terminated'|null $membershipStatus
 * @property \Aws\Api\DateTimeResult|null $membershipActivationTimestamp
 * @property \Aws\Api\DateTimeResult|null $membershipDeactivationTimestamp
 * @property 'Standalone'|'Organization'|null $customerType
 * @property int|null $numberOfAccountsCovered
 * @property list<Shapes\IncidentResponder>|null $incidentResponseTeam
 * @property list<Shapes\OptInFeature>|null $optInFeatures
 * @property Shapes\MembershipAccountsConfigurations|null $membershipAccountsConfigurations
 */
class GetMembershipResponse extends Response
{
}
