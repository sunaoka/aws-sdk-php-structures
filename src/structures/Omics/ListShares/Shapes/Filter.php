<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $resourceArns
 * @property list<'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'>|null $status
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     resourceArns?: list<string>|null,
     *     status?: list<'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
