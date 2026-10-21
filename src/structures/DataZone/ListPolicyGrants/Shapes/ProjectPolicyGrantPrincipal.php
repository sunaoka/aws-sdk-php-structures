<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD'|'USER_CREATED_DESIGNATION' $projectDesignation
 * @property string|null $userCreatedDesignationId
 * @property string|null $projectIdentifier
 * @property ProjectGrantFilter|null $projectGrantFilter
 */
class ProjectPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     projectDesignation: 'OWNER'|'CONTRIBUTOR'|'PROJECT_CATALOG_STEWARD'|'USER_CREATED_DESIGNATION',
     *     userCreatedDesignationId?: string|null,
     *     projectIdentifier?: string|null,
     *     projectGrantFilter?: ProjectGrantFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
