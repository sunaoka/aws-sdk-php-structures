<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListRuleGroupsNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string $name
 * @property RuleGroupsNamespaceStatus $status
 * @property array<string, string> $tags
 */
class RuleGroupsNamespaceSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
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
