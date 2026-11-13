<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainSuffix
 * @property string|null $OtherDomains
 * @property string|null $ResolverHistory
 */
class DnsContext extends Shape
{
    /**
     * @param array{
     *     DomainSuffix?: string|null,
     *     OtherDomains?: string|null,
     *     ResolverHistory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
