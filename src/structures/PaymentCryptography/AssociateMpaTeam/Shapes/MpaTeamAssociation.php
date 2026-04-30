<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\AssociateMpaTeam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE' $Action
 * @property string $MpaTeamArn
 * @property 'ACTIVE'|'UPDATE_PENDING'|'DELETE_PENDING' $AssociationState
 * @property MpaStatus|null $MpaStatus
 */
class MpaTeamAssociation extends Shape
{
    /**
     * @param array{
     *     Action: 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE',
     *     MpaTeamArn: string,
     *     AssociationState: 'ACTIVE'|'UPDATE_PENDING'|'DELETE_PENDING',
     *     MpaStatus?: MpaStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
