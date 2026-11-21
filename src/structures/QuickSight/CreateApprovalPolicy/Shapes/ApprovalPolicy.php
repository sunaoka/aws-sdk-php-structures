<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateApprovalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $PolicyArn
 * @property string $Name
 * @property string|null $Description
 * @property list<'SHARE'|'PUBLISH'> $Actions
 * @property list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'|'FLOW'> $AssetTypes
 * @property ApplicableTo $ApplicableTo
 * @property list<string> $ApprovalGroups
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ApprovalPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyId: string,
     *     PolicyArn: string,
     *     Name: string,
     *     Description?: string|null,
     *     Actions: list<'SHARE'|'PUBLISH'>,
     *     AssetTypes: list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'|'FLOW'>,
     *     ApplicableTo: ApplicableTo,
     *     ApprovalGroups: list<string>,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
