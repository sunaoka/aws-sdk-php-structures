<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLANK_POLICY' $templateName
 */
class ReplaceDefaultPolicyVersionParams extends Shape
{
    /**
     * @param array{templateName: 'BLANK_POLICY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
