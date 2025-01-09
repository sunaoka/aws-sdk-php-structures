<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $RuleGroupArn
 * @property string $RuleGroupName
 * @property Shapes\RuleGroup $RuleGroup
 * @property string $Rules
 * @property 'STATELESS'|'STATEFUL' $Type
 * @property string $Description
 * @property bool $DryRun
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 * @property Shapes\SourceMetadata $SourceMetadata
 * @property bool $AnalyzeRuleGroup
 */
class UpdateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken: string,
     *     RuleGroupArn?: string,
     *     RuleGroupName?: string,
     *     RuleGroup?: Shapes\RuleGroup,
     *     Rules?: string,
     *     Type?: 'STATELESS'|'STATEFUL',
     *     Description?: string,
     *     DryRun?: bool,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration,
     *     SourceMetadata?: Shapes\SourceMetadata,
     *     AnalyzeRuleGroup?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
