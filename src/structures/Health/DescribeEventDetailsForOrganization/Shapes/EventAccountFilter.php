<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property string $awsAccountId
 */
class EventAccountFilter extends Shape
{
    /**
     * @param array{
     *     eventArn: string,
     *     awsAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
