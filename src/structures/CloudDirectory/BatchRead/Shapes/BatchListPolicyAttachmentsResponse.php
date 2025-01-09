<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ObjectIdentifiers
 * @property string $NextToken
 */
class BatchListPolicyAttachmentsResponse extends Shape
{
    /**
     * @param array{
     *     ObjectIdentifiers?: list<string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
