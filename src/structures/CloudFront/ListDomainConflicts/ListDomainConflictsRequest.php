<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDomainConflicts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 * @property Shapes\DistributionResourceId $DomainControlValidationResource
 * @property int|null $MaxItems
 * @property string|null $Marker
 */
class ListDomainConflictsRequest extends Request
{
    /**
     * @param array{
     *     Domain: string,
     *     DomainControlValidationResource: Shapes\DistributionResourceId,
     *     MaxItems?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
