<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AssetName
 * @property 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK' $Category
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property string $NodeId
 * @property Shapes\NodeInterface $NodeInterface
 * @property string $OwnerAccount
 * @property string $PackageArn
 * @property string $PackageId
 * @property string $PackageName
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class DescribeNodeResponse extends Response
{
}
