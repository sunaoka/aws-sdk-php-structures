<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $imageTags
 * @property string|null $imageDigest
 * @property \Aws\Api\DateTimeResult|null $imagePushedAt
 * @property LifecyclePolicyRuleAction|null $action
 * @property int<1, max>|null $appliedRulePriority
 * @property 'ARCHIVE'|'STANDARD'|null $storageClass
 */
class LifecyclePolicyPreviewResult extends Shape
{
    /**
     * @param array{
     *     imageTags?: list<string>|null,
     *     imageDigest?: string|null,
     *     imagePushedAt?: \Aws\Api\DateTimeResult|null,
     *     action?: LifecyclePolicyRuleAction|null,
     *     appliedRulePriority?: int<1, max>|null,
     *     storageClass?: 'ARCHIVE'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
