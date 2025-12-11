<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadClientCredentialsGrantDetails|null $ReadClientCredentialsGrantDetails
 */
class ReadClientCredentialsDetails extends Shape
{
    /**
     * @param array{ReadClientCredentialsGrantDetails?: ReadClientCredentialsGrantDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
