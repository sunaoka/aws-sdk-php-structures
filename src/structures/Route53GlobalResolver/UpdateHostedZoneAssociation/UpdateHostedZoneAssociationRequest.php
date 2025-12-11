<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateHostedZoneAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $hostedZoneAssociationId
 * @property string|null $name
 */
class UpdateHostedZoneAssociationRequest extends Request
{
    /**
     * @param array{
     *     hostedZoneAssociationId: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
