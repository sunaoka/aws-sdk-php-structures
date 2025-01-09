<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Protocol
 * @property bool $Blocked
 * @property string $DomainWithSuffix
 */
class DnsRequestAction extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Protocol?: string,
     *     Blocked?: bool,
     *     DomainWithSuffix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
