<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $StudioWebPortalAccess
 * @property string|null $DomainAccountId
 * @property string|null $DomainRegion
 * @property string|null $DomainId
 * @property string|null $ProjectId
 * @property string|null $EnvironmentId
 * @property string|null $ProjectS3Path
 */
class UnifiedStudioSettings extends Shape
{
    /**
     * @param array{
     *     StudioWebPortalAccess?: 'ENABLED'|'DISABLED'|null,
     *     DomainAccountId?: string|null,
     *     DomainRegion?: string|null,
     *     DomainId?: string|null,
     *     ProjectId?: string|null,
     *     EnvironmentId?: string|null,
     *     ProjectS3Path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
