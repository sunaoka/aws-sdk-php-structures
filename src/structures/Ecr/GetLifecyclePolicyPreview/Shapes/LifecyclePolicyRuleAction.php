<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPIRE'|'TRANSITION'|null $type
 * @property 'ARCHIVE'|null $targetStorageClass
 */
class LifecyclePolicyRuleAction extends Shape
{
    /**
     * @param array{
     *     type?: 'EXPIRE'|'TRANSITION'|null,
     *     targetStorageClass?: 'ARCHIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
