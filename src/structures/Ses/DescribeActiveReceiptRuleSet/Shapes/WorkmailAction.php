<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeActiveReceiptRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 * @property string $OrganizationArn
 */
class WorkmailAction extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     OrganizationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
