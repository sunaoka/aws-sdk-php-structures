<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationPath
 * @property string $RegistrationPagePath
 * @property RequestInspectionACFP $RequestInspection
 * @property ResponseInspection $ResponseInspection
 * @property bool $EnableRegexInPath
 */
class AWSManagedRulesACFPRuleSet extends Shape
{
    /**
     * @param array{
     *     CreationPath: string,
     *     RegistrationPagePath: string,
     *     RequestInspection: RequestInspectionACFP,
     *     ResponseInspection?: ResponseInspection,
     *     EnableRegexInPath?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
