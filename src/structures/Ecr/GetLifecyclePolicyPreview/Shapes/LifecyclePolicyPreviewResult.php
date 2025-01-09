<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $imageTags
 * @property string $imageDigest
 * @property \Aws\Api\DateTimeResult $imagePushedAt
 * @property LifecyclePolicyRuleAction $action
 * @property int $appliedRulePriority
 */
class LifecyclePolicyPreviewResult extends Shape
{
    /**
     * @param array{
     *     imageTags?: list<string>,
     *     imageDigest?: string,
     *     imagePushedAt?: \Aws\Api\DateTimeResult,
     *     action?: LifecyclePolicyRuleAction,
     *     appliedRulePriority?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
