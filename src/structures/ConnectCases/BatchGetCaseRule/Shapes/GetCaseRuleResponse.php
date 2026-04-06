<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseRuleId
 * @property string $name
 * @property string $caseRuleArn
 * @property CaseRuleDetails $rule
 * @property string|null $description
 * @property bool|null $deleted
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property array<string, string>|null $tags
 */
class GetCaseRuleResponse extends Shape
{
    /**
     * @param array{
     *     caseRuleId: string,
     *     name: string,
     *     caseRuleArn: string,
     *     rule: CaseRuleDetails,
     *     description?: string|null,
     *     deleted?: bool|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
