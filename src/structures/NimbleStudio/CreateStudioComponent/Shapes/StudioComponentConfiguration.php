<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStudioComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActiveDirectoryConfiguration|null $activeDirectoryConfiguration
 * @property ComputeFarmConfiguration|null $computeFarmConfiguration
 * @property LicenseServiceConfiguration|null $licenseServiceConfiguration
 * @property SharedFileSystemConfiguration|null $sharedFileSystemConfiguration
 */
class StudioComponentConfiguration extends Shape
{
    /**
     * @param array{
     *     activeDirectoryConfiguration?: ActiveDirectoryConfiguration|null,
     *     computeFarmConfiguration?: ComputeFarmConfiguration|null,
     *     licenseServiceConfiguration?: LicenseServiceConfiguration|null,
     *     sharedFileSystemConfiguration?: SharedFileSystemConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
