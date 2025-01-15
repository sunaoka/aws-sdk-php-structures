<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationPath
 * @property string $RegistrationPagePath
 * @property RequestInspectionACFP $RequestInspection
 * @property ResponseInspection|null $ResponseInspection
 * @property bool|null $EnableRegexInPath
 */
class AWSManagedRulesACFPRuleSet extends Shape
{
    /**
     * @param array{
     *     CreationPath: string,
     *     RegistrationPagePath: string,
     *     RequestInspection: RequestInspectionACFP,
     *     ResponseInspection?: ResponseInspection|null,
     *     EnableRegexInPath?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
