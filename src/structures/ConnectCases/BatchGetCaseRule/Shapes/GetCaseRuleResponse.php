<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseRuleArn
 * @property string $caseRuleId
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property bool|null $deleted
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property string $name
 * @property CaseRuleDetails $rule
 * @property array<string, string>|null $tags
 */
class GetCaseRuleResponse extends Shape
{
    /**
     * @param array{
     *     caseRuleArn: string,
     *     caseRuleId: string,
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     deleted?: bool|null,
     *     description?: string|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     rule: CaseRuleDetails,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
