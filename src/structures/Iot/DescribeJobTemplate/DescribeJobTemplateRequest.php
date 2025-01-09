<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobTemplateId
 */
class DescribeJobTemplateRequest extends Request
{
    /**
     * @param array{jobTemplateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
