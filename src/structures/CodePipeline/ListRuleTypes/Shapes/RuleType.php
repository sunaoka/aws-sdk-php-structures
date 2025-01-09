<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleTypeId $id
 * @property RuleTypeSettings $settings
 * @property list<RuleConfigurationProperty> $ruleConfigurationProperties
 * @property ArtifactDetails $inputArtifactDetails
 */
class RuleType extends Shape
{
    /**
     * @param array{
     *     id: RuleTypeId,
     *     settings?: RuleTypeSettings,
     *     ruleConfigurationProperties?: list<RuleConfigurationProperty>,
     *     inputArtifactDetails: ArtifactDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
