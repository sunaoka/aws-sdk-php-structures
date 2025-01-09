<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateVpcLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Name
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 * @property array<string, string> $Tags
 * @property string $VpcLinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'FAILED'|'INACTIVE' $VpcLinkStatus
 * @property string $VpcLinkStatusMessage
 * @property 'V2' $VpcLinkVersion
 */
class CreateVpcLinkResponse extends Response
{
}
