<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstanceDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationInstanceId
 * @property string $ApplicationInstanceIdToReplace
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $DefaultRuntimeContextDevice
 * @property string $Description
 * @property Shapes\ManifestOverridesPayload $ManifestOverridesPayload
 * @property Shapes\ManifestPayload $ManifestPayload
 * @property string $Name
 */
class DescribeApplicationInstanceDetailsResponse extends Response
{
}
