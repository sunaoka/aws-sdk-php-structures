<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreateAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $CreatedAt
 * @property list<Shapes\EgressEndpoint>|null $EgressEndpoints
 * @property string|null $Id
 * @property string|null $PackagingGroupId
 * @property string|null $ResourceId
 * @property string|null $SourceArn
 * @property string|null $SourceRoleArn
 * @property array<string, string>|null $Tags
 */
class CreateAssetResponse extends Response
{
}
