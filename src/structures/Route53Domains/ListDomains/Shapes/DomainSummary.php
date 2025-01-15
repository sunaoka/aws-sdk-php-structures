<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property bool|null $AutoRenew
 * @property bool|null $TransferLock
 * @property \Aws\Api\DateTimeResult|null $Expiry
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     AutoRenew?: bool|null,
     *     TransferLock?: bool|null,
     *     Expiry?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
