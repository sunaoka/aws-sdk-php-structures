<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldCondition> $Conditions
 * @property string $RuleBehavior
 * @property ConditionalValidation|null $ConditionalValidation
 */
class ConditionalRule extends Shape
{
    /**
     * @param array{
     *     Conditions: list<FieldCondition>,
     *     RuleBehavior: string,
     *     ConditionalValidation?: ConditionalValidation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
