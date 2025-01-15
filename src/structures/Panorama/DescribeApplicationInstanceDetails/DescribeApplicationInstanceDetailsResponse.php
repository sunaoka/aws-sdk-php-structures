<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstanceDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationInstanceId
 * @property string|null $ApplicationInstanceIdToReplace
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $DefaultRuntimeContextDevice
 * @property string|null $Description
 * @property Shapes\ManifestOverridesPayload|null $ManifestOverridesPayload
 * @property Shapes\ManifestPayload|null $ManifestPayload
 * @property string|null $Name
 */
class DescribeApplicationInstanceDetailsResponse extends Response
{
}
