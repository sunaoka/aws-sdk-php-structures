<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $template
 */
class DescribeWorldTemplateRequest extends Request
{
    /**
     * @param array{template: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
