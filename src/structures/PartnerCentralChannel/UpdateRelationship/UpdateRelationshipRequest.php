<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 * @property string $programManagementAccountIdentifier
 * @property string|null $revision
 * @property string|null $displayName
 * @property Shapes\SupportPlan|null $requestedSupportPlan
 */
class UpdateRelationshipRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     identifier: string,
     *     programManagementAccountIdentifier: string,
     *     revision?: string|null,
     *     displayName?: string|null,
     *     requestedSupportPlan?: Shapes\SupportPlan|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
