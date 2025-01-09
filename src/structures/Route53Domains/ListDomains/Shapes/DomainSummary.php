<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property bool $AutoRenew
 * @property bool $TransferLock
 * @property \Aws\Api\DateTimeResult $Expiry
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     AutoRenew?: bool,
     *     TransferLock?: bool,
     *     Expiry?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
