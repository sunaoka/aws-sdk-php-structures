<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RulesetArn
 * @property 'CHECK_ALL'|null $ValidationMode
 */
class ValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     RulesetArn: string,
     *     ValidationMode?: 'CHECK_ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
