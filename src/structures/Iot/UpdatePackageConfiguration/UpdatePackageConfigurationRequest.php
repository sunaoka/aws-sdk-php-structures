<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VersionUpdateByJobsConfig|null $versionUpdateByJobsConfig
 * @property string|null $clientToken
 */
class UpdatePackageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     versionUpdateByJobsConfig?: Shapes\VersionUpdateByJobsConfig|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
