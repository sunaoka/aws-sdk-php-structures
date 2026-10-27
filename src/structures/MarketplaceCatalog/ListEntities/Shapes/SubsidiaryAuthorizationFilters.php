<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubsidiaryAuthorizationEntityIdFilter|null $EntityId
 * @property SubsidiaryAuthorizationStatusFilter|null $Status
 * @property SubsidiaryAuthorizationResourceIdFilter|null $ResourceId
 * @property SubsidiaryAuthorizationResourceNameFilter|null $ResourceName
 * @property SubsidiaryAuthorizationNameFilter|null $Name
 * @property SubsidiaryAuthorizationSubsidiaryAccountIdFilter|null $SubsidiaryAccountId
 * @property SubsidiaryAuthorizationCreatedDateFilter|null $CreatedDate
 * @property SubsidiaryAuthorizationLastModifiedDateFilter|null $LastModifiedDate
 */
class SubsidiaryAuthorizationFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: SubsidiaryAuthorizationEntityIdFilter|null,
     *     Status?: SubsidiaryAuthorizationStatusFilter|null,
     *     ResourceId?: SubsidiaryAuthorizationResourceIdFilter|null,
     *     ResourceName?: SubsidiaryAuthorizationResourceNameFilter|null,
     *     Name?: SubsidiaryAuthorizationNameFilter|null,
     *     SubsidiaryAccountId?: SubsidiaryAuthorizationSubsidiaryAccountIdFilter|null,
     *     CreatedDate?: SubsidiaryAuthorizationCreatedDateFilter|null,
     *     LastModifiedDate?: SubsidiaryAuthorizationLastModifiedDateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
