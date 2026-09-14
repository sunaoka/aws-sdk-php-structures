<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property 'FAILED'|'CANCELLED'|'TIMED_OUT'|null $status
 * @property 'ASSOCIATE_LICENSES'|'UPDATE_LAUNCH_TEMPLATES'|'PUT_SSM_PARAMETERS'|'UPDATE_FAST_LAUNCH_CONFIGURATIONS'|'EXPORT_AMI'|null $imageConfigurationStep
 * @property string|null $errorMessage
 * @property string|null $targetAccountId
 */
class RegionFailure extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     status?: 'FAILED'|'CANCELLED'|'TIMED_OUT'|null,
     *     imageConfigurationStep?: 'ASSOCIATE_LICENSES'|'UPDATE_LAUNCH_TEMPLATES'|'PUT_SSM_PARAMETERS'|'UPDATE_FAST_LAUNCH_CONFIGURATIONS'|'EXPORT_AMI'|null,
     *     errorMessage?: string|null,
     *     targetAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
