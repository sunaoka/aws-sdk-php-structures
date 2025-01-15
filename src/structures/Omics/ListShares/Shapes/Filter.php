<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $resourceArns
 * @property list<'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'>|null $status
 * @property list<'VARIANT_STORE'|'ANNOTATION_STORE'|'WORKFLOW'>|null $type
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     resourceArns?: list<string>|null,
     *     status?: list<'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'>|null,
     *     type?: list<'VARIANT_STORE'|'ANNOTATION_STORE'|'WORKFLOW'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
