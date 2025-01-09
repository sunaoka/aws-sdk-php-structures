<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribeAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $CreatedAt
 * @property list<Shapes\EgressEndpoint> $EgressEndpoints
 * @property string $Id
 * @property string $PackagingGroupId
 * @property string $ResourceId
 * @property string $SourceArn
 * @property string $SourceRoleArn
 * @property array<string, string> $Tags
 */
class DescribeAssetResponse extends Response
{
}
