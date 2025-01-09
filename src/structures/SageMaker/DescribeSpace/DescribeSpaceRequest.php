<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SpaceName
 */
class DescribeSpaceRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SpaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
