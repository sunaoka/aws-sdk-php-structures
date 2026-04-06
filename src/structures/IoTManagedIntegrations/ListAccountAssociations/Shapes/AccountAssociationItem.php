<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountAssociationId
 * @property 'ASSOCIATION_IN_PROGRESS'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCEEDED'|'ASSOCIATION_DELETING'|'REFRESH_TOKEN_EXPIRED' $AssociationState
 * @property string|null $ErrorMessage
 * @property string|null $ConnectorDestinationId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Arn
 */
class AccountAssociationItem extends Shape
{
    /**
     * @param array{
     *     AccountAssociationId: string,
     *     AssociationState: 'ASSOCIATION_IN_PROGRESS'|'ASSOCIATION_FAILED'|'ASSOCIATION_SUCCEEDED'|'ASSOCIATION_DELETING'|'REFRESH_TOKEN_EXPIRED',
     *     ErrorMessage?: string|null,
     *     ConnectorDestinationId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
