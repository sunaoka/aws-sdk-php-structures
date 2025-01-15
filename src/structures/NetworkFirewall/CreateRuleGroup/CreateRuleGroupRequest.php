<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupName
 * @property Shapes\RuleGroup|null $RuleGroup
 * @property string|null $Rules
 * @property 'STATELESS'|'STATEFUL' $Type
 * @property string|null $Description
 * @property int $Capacity
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $DryRun
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\SourceMetadata|null $SourceMetadata
 * @property bool|null $AnalyzeRuleGroup
 */
class CreateRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName: string,
     *     RuleGroup?: Shapes\RuleGroup|null,
     *     Rules?: string|null,
     *     Type: 'STATELESS'|'STATEFUL',
     *     Description?: string|null,
     *     Capacity: int,
     *     Tags?: list<Shapes\Tag>|null,
     *     DryRun?: bool|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     SourceMetadata?: Shapes\SourceMetadata|null,
     *     AnalyzeRuleGroup?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
