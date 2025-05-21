<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDomainConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property 'distribution'|'distribution-tenant' $ResourceType
 * @property string $ResourceId
 * @property string $AccountId
 */
class DomainConflict extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     ResourceType: 'distribution'|'distribution-tenant',
     *     ResourceId: string,
     *     AccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
