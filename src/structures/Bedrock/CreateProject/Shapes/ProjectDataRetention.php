<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'none'|'aws_review'|'provider_data_share'|'inherit' $mode
 */
class ProjectDataRetention extends Shape
{
    /**
     * @param array{mode: 'default'|'none'|'aws_review'|'provider_data_share'|'inherit'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
