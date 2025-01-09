<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeScalingParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeScalingParametersRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
