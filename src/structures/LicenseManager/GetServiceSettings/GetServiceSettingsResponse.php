<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $S3BucketArn
 * @property string|null $SnsTopicArn
 * @property Shapes\OrganizationConfiguration|null $OrganizationConfiguration
 * @property bool|null $EnableCrossAccountsDiscovery
 * @property string|null $LicenseManagerResourceShareArn
 */
class GetServiceSettingsResponse extends Response
{
}
