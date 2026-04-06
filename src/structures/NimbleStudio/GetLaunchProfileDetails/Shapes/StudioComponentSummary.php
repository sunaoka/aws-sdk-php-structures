<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string|null $name
 * @property string|null $studioComponentId
 * @property 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null $subtype
 * @property 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'|null $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class StudioComponentSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     description?: string|null,
     *     name?: string|null,
     *     studioComponentId?: string|null,
     *     subtype?: 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null,
     *     type?: 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
