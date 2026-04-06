<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DescribeMlflowAppRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
