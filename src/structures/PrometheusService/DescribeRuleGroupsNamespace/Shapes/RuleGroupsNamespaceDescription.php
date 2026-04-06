<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeRuleGroupsNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Psr\Http\Message\StreamInterface $data
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string $name
 * @property RuleGroupsNamespaceStatus $status
 * @property array<string, string>|null $tags
 */
class RuleGroupsNamespaceDescription extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     data: \Psr\Http\Message\StreamInterface,
     *     modifiedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     status: RuleGroupsNamespaceStatus,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
