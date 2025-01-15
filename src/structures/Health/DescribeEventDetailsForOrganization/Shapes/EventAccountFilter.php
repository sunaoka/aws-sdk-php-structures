<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property string|null $awsAccountId
 */
class EventAccountFilter extends Shape
{
    /**
     * @param array{
     *     eventArn: string,
     *     awsAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
