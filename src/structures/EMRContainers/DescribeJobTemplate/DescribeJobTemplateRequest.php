<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DescribeJobTemplateRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
