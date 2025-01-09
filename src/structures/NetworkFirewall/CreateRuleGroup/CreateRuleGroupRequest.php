<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupName
 * @property Shapes\RuleGroup $RuleGroup
 * @property string $Rules
 * @property 'STATELESS'|'STATEFUL' $Type
 * @property string $Description
 * @property int $Capacity
 * @property list<Shapes\Tag> $Tags
 * @property bool $DryRun
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 * @property Shapes\SourceMetadata $SourceMetadata
 * @property bool $AnalyzeRuleGroup
 */
class CreateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName: string,
     *     RuleGroup?: Shapes\RuleGroup,
     *     Rules?: string,
     *     Type: 'STATELESS'|'STATEFUL',
     *     Description?: string,
     *     Capacity: int,
     *     Tags?: list<Shapes\Tag>,
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
