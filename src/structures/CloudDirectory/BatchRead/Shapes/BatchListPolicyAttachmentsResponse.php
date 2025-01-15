<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ObjectIdentifiers
 * @property string|null $NextToken
 */
class BatchListPolicyAttachmentsResponse extends Shape
{
    /**
     * @param array{
     *     ObjectIdentifiers?: list<string>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
