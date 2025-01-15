<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $S3BucketArn
 * @property string|null $SnsTopicArn
 * @property Shapes\OrganizationConfiguration|null $OrganizationConfiguration
 * @property bool|null $EnableCrossAccountsDiscovery
 */
class UpdateServiceSettingsRequest extends Request
{
    /**
     * @param array{
     *     S3BucketArn?: string|null,
     *     SnsTopicArn?: string|null,
     *     OrganizationConfiguration?: Shapes\OrganizationConfiguration|null,
     *     EnableCrossAccountsDiscovery?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
