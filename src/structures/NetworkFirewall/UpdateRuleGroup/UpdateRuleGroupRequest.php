<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string|null $RuleGroupArn
 * @property string|null $RuleGroupName
 * @property Shapes\RuleGroup|null $RuleGroup
 * @property string|null $Rules
 * @property 'STATELESS'|'STATEFUL'|null $Type
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\SourceMetadata|null $SourceMetadata
 * @property bool|null $AnalyzeRuleGroup
 * @property Shapes\SummaryConfiguration|null $SummaryConfiguration
 */
class UpdateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken: string,
     *     RuleGroupArn?: string|null,
     *     RuleGroupName?: string|null,
     *     RuleGroup?: Shapes\RuleGroup|null,
     *     Rules?: string|null,
     *     Type?: 'STATELESS'|'STATEFUL'|null,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     SourceMetadata?: Shapes\SourceMetadata|null,
     *     AnalyzeRuleGroup?: bool|null,
     *     SummaryConfiguration?: Shapes\SummaryConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
