<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCodeRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeRepositoryName
 */
class DescribeCodeRepositoryRequest extends Request
{
    /**
     * @param array{CodeRepositoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
