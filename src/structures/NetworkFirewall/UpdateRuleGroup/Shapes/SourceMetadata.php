<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 * @property string|null $SourceUpdateToken
 */
class SourceMetadata extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     SourceUpdateToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
