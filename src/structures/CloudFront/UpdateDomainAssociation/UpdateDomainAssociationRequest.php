<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDomainAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property Shapes\DistributionResourceId $TargetResource
 * @property string|null $IfMatch
 */
class UpdateDomainAssociationRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     TargetResource: Shapes\DistributionResourceId,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
