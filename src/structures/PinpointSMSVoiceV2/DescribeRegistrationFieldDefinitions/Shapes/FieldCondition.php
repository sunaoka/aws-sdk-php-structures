<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DependsOnFieldPath
 * @property string $Operator
 * @property list<string>|null $Values
 */
class FieldCondition extends Shape
{
    /**
     * @param array{
     *     DependsOnFieldPath: string,
     *     Operator: string,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
