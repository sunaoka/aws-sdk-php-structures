<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListRuleGroupsNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property RuleGroupsNamespaceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string>|null $tags
 */
class RuleGroupsNamespaceSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     status: RuleGroupsNamespaceStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
