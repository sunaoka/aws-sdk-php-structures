<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VersionUpdateByJobsConfig $versionUpdateByJobsConfig
 * @property string $clientToken
 */
class UpdatePackageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     versionUpdateByJobsConfig?: Shapes\VersionUpdateByJobsConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
