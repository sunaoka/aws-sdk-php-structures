<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppImageConfigName
 */
class DescribeAppImageConfigRequest extends Request
{
    /**
     * @param array{AppImageConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
