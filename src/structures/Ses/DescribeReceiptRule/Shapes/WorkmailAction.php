<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 * @property string $OrganizationArn
 */
class WorkmailAction extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string,
     *     OrganizationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
