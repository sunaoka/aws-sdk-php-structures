<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Protocol
 * @property bool|null $Blocked
 * @property string|null $DomainWithSuffix
 */
class DnsRequestAction extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Protocol?: string|null,
     *     Blocked?: bool|null,
     *     DomainWithSuffix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
