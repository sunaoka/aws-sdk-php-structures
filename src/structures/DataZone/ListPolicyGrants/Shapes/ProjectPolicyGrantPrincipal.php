<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD' $projectDesignation
 * @property ProjectGrantFilter|null $projectGrantFilter
 * @property string|null $projectIdentifier
 */
class ProjectPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     projectDesignation: 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD',
     *     projectGrantFilter?: ProjectGrantFilter|null,
     *     projectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
