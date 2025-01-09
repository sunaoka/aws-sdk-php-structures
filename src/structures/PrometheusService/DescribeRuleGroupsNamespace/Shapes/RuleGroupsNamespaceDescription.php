<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeRuleGroupsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $data
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string $name
 * @property RuleGroupsNamespaceStatus $status
 * @property array<string, string> $tags
 */
class RuleGroupsNamespaceDescription extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     data: string,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     status: RuleGroupsNamespaceStatus,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
