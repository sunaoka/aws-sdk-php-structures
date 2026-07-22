<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetQualificationsAssociationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileId
 * @property string|null $AccountId
 */
class QualificationsAssociationPartner extends Shape
{
    /**
     * @param array{
     *     ProfileId?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
