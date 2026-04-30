<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetMpaTeamAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE' $Action
 */
class GetMpaTeamAssociationRequest extends Request
{
    /**
     * @param array{Action: 'IMPORT_ROOT_PUBLIC_KEY_CERTIFICATE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
