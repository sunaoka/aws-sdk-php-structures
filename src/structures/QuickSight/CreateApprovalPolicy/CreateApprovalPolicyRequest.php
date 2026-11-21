<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateApprovalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $Name
 * @property string|null $Description
 * @property list<'SHARE'|'PUBLISH'> $Actions
 * @property list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'|'FLOW'> $AssetTypes
 * @property Shapes\ApplicableTo $ApplicableTo
 * @property list<string> $ApprovalGroups
 */
class CreateApprovalPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Actions: list<'SHARE'|'PUBLISH'>,
     *     AssetTypes: list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'|'FLOW'>,
     *     ApplicableTo: Shapes\ApplicableTo,
     *     ApprovalGroups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
