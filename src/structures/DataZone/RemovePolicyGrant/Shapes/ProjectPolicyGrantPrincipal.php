<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD' $projectDesignation
 * @property string|null $projectIdentifier
 * @property ProjectGrantFilter|null $projectGrantFilter
 */
class ProjectPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     projectDesignation: 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD',
     *     projectIdentifier?: string|null,
     *     projectGrantFilter?: ProjectGrantFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
