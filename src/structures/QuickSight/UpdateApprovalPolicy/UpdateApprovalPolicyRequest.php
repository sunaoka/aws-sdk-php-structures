<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateApprovalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<'SHARE'>|null $Actions
 * @property list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'>|null $AssetTypes
 * @property Shapes\ApplicableTo|null $ApplicableTo
 * @property list<string>|null $ApprovalGroups
 */
class UpdateApprovalPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Actions?: list<'SHARE'>|null,
     *     AssetTypes?: list<'AGENT'|'SPACE'|'KNOWLEDGE_BASE'>|null,
     *     ApplicableTo?: Shapes\ApplicableTo|null,
     *     ApprovalGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
