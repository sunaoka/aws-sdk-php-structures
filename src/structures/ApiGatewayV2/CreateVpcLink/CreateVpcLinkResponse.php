<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateVpcLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Name
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SubnetIds
 * @property array<string, string>|null $Tags
 * @property string|null $VpcLinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'FAILED'|'INACTIVE'|null $VpcLinkStatus
 * @property string|null $VpcLinkStatusMessage
 * @property 'V2'|null $VpcLinkVersion
 */
class CreateVpcLinkResponse extends Response
{
}
