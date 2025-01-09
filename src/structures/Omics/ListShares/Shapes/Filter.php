<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $resourceArns
 * @property list<'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'> $status
 * @property list<'VARIANT_STORE'|'ANNOTATION_STORE'|'WORKFLOW'> $type
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     resourceArns?: list<string>,
     *     status?: list<'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'>,
     *     type?: list<'VARIANT_STORE'|'ANNOTATION_STORE'|'WORKFLOW'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
