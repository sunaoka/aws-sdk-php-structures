<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $S3BucketArn
 * @property string $SnsTopicArn
 * @property Shapes\OrganizationConfiguration $OrganizationConfiguration
 * @property bool $EnableCrossAccountsDiscovery
 */
class UpdateServiceSettingsRequest extends Request
{
    /**
     * @param array{
     *     S3BucketArn?: string,
     *     SnsTopicArn?: string,
     *     OrganizationConfiguration?: Shapes\OrganizationConfiguration,
     *     EnableCrossAccountsDiscovery?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
