<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dnsSubdomain
 * @property string|null $description
 * @property string $id
 * @property string $idcApplicationArn
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $workspaceName
 */
class DescribeApplicationResponse extends Response
{
}
