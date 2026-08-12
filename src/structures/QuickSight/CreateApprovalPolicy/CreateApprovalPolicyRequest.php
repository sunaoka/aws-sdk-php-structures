<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateApprovalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $Name
 * @property string|null $Description
 * @property list<'SHARE'> $Actions
 * @property list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'> $AssetTypes
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
     *     Actions: list<'SHARE'>,
     *     AssetTypes: list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'>,
     *     ApplicableTo: Shapes\ApplicableTo,
     *     ApprovalGroups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
