<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventArn
 * @property array<string, list<string>>|null $tags
 */
class AffectedAccountFilter extends Shape
{
    /**
     * @param array{
     *     eventArn?: string|null,
     *     tags?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
