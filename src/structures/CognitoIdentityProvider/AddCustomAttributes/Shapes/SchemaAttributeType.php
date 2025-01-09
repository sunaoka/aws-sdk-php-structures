<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AddCustomAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'String'|'Number'|'DateTime'|'Boolean' $AttributeDataType
 * @property bool $DeveloperOnlyAttribute
 * @property bool $Mutable
 * @property bool $Required
 * @property NumberAttributeConstraintsType $NumberAttributeConstraints
 * @property StringAttributeConstraintsType $StringAttributeConstraints
 */
class SchemaAttributeType extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     AttributeDataType?: 'String'|'Number'|'DateTime'|'Boolean',
     *     DeveloperOnlyAttribute?: bool,
     *     Mutable?: bool,
     *     Required?: bool,
     *     NumberAttributeConstraints?: NumberAttributeConstraintsType,
     *     StringAttributeConstraints?: StringAttributeConstraintsType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
