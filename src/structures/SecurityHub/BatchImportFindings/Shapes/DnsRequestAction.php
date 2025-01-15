<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Protocol
 * @property bool|null $Blocked
 */
class DnsRequestAction extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Protocol?: string|null,
     *     Blocked?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
