<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD' $projectDesignation
 * @property ProjectGrantFilter $projectGrantFilter
 * @property string $projectIdentifier
 */
class ProjectPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     projectDesignation: 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD',
     *     projectGrantFilter?: ProjectGrantFilter,
     *     projectIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
