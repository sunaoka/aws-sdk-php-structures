<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleTypeId $id
 * @property RuleTypeSettings|null $settings
 * @property list<RuleConfigurationProperty>|null $ruleConfigurationProperties
 * @property ArtifactDetails $inputArtifactDetails
 */
class RuleType extends Shape
{
    /**
     * @param array{
     *     id: RuleTypeId,
     *     settings?: RuleTypeSettings|null,
     *     ruleConfigurationProperties?: list<RuleConfigurationProperty>|null,
     *     inputArtifactDetails: ArtifactDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
