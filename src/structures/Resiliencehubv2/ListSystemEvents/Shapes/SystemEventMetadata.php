<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemCreatedMetadata|null $systemCreated
 * @property SystemDeletedMetadata|null $systemDeleted
 * @property SystemUserJourneyCreatedMetadata|null $systemUserJourneyCreated
 * @property SystemUserJourneyUpdatedMetadata|null $systemUserJourneyUpdated
 * @property SystemUserJourneyDeletedMetadata|null $systemUserJourneyDeleted
 * @property SystemServiceAssociatedMetadata|null $systemServiceAssociated
 * @property SystemServiceDisassociatedMetadata|null $systemServiceDisassociated
 * @property SystemPolicyAssociatedMetadata|null $systemPolicyAssociated
 * @property SystemPolicyDisassociatedMetadata|null $systemPolicyDisassociated
 */
class SystemEventMetadata extends Shape
{
    /**
     * @param array{
     *     systemCreated?: SystemCreatedMetadata|null,
     *     systemDeleted?: SystemDeletedMetadata|null,
     *     systemUserJourneyCreated?: SystemUserJourneyCreatedMetadata|null,
     *     systemUserJourneyUpdated?: SystemUserJourneyUpdatedMetadata|null,
     *     systemUserJourneyDeleted?: SystemUserJourneyDeletedMetadata|null,
     *     systemServiceAssociated?: SystemServiceAssociatedMetadata|null,
     *     systemServiceDisassociated?: SystemServiceDisassociatedMetadata|null,
     *     systemPolicyAssociated?: SystemPolicyAssociatedMetadata|null,
     *     systemPolicyDisassociated?: SystemPolicyDisassociatedMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
