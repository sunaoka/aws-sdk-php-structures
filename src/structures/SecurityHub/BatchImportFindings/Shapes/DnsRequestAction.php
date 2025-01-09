<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Protocol
 * @property bool $Blocked
 */
class DnsRequestAction extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Protocol?: string,
     *     Blocked?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
