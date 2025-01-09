<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $S3BucketArn
 * @property string $SnsTopicArn
 * @property Shapes\OrganizationConfiguration $OrganizationConfiguration
 * @property bool $EnableCrossAccountsDiscovery
 * @property string $LicenseManagerResourceShareArn
 */
class GetServiceSettingsResponse extends Response
{
}
