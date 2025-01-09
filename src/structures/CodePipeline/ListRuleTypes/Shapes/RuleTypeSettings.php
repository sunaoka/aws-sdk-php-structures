<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $thirdPartyConfigurationUrl
 * @property string $entityUrlTemplate
 * @property string $executionUrlTemplate
 * @property string $revisionUrlTemplate
 */
class RuleTypeSettings extends Shape
{
    /**
     * @param array{
     *     thirdPartyConfigurationUrl?: string,
     *     entityUrlTemplate?: string,
     *     executionUrlTemplate?: string,
     *     revisionUrlTemplate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
