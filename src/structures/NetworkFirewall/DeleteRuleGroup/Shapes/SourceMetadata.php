<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $SourceUpdateToken
 */
class SourceMetadata extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     SourceUpdateToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
