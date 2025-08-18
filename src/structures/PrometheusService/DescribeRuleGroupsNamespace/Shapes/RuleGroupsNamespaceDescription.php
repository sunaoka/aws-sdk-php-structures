<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeRuleGroupsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property RuleGroupsNamespaceStatus $status
 * @property \Psr\Http\Message\StreamInterface $data
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property array<string, string>|null $tags
 */
class RuleGroupsNamespaceDescription extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     status: RuleGroupsNamespaceStatus,
     *     data: \Psr\Http\Message\StreamInterface,
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
