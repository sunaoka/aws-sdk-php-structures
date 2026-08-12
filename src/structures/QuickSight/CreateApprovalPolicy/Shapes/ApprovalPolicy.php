<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateApprovalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $PolicyArn
 * @property string $Name
 * @property string|null $Description
 * @property list<'SHARE'> $Actions
 * @property list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'> $AssetTypes
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
     *     Actions: list<'SHARE'>,
     *     AssetTypes: list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'>,
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
