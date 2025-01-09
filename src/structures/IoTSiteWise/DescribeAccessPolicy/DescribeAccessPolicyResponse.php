<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAccessPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accessPolicyId
 * @property string $accessPolicyArn
 * @property Shapes\Identity $accessPolicyIdentity
 * @property Shapes\Resource $accessPolicyResource
 * @property 'ADMINISTRATOR'|'VIEWER' $accessPolicyPermission
 * @property \Aws\Api\DateTimeResult $accessPolicyCreationDate
 * @property \Aws\Api\DateTimeResult $accessPolicyLastUpdateDate
 */
class DescribeAccessPolicyResponse extends Response
{
}
