<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property string $Name
 * @property string $NodeId
 * @property string|null $Operation
 * @property string|null $Type
 * @property double|null $Duration
 * @property string|null $Status
 */
class Node extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: array<string, string>,
     *     Name: string,
     *     NodeId: string,
     *     Operation?: string|null,
     *     Type?: string|null,
     *     Duration?: double|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
