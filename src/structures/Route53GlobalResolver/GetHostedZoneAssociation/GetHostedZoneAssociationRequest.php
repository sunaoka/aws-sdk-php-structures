<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetHostedZoneAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $hostedZoneAssociationId
 */
class GetHostedZoneAssociationRequest extends Request
{
    /**
     * @param array{hostedZoneAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
