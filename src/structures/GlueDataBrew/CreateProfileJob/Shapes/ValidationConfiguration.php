<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateProfileJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RulesetArn
 * @property 'CHECK_ALL' $ValidationMode
 */
class ValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     RulesetArn: string,
     *     ValidationMode?: 'CHECK_ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
