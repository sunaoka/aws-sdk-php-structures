<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'String'|'Number'|'DateTime'|'Boolean'|null $AttributeDataType
 * @property bool|null $DeveloperOnlyAttribute
 * @property bool|null $Mutable
 * @property bool|null $Required
 * @property NumberAttributeConstraintsType|null $NumberAttributeConstraints
 * @property StringAttributeConstraintsType|null $StringAttributeConstraints
 */
class SchemaAttributeType extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     AttributeDataType?: 'String'|'Number'|'DateTime'|'Boolean'|null,
     *     DeveloperOnlyAttribute?: bool|null,
     *     Mutable?: bool|null,
     *     Required?: bool|null,
     *     NumberAttributeConstraints?: NumberAttributeConstraintsType|null,
     *     StringAttributeConstraints?: StringAttributeConstraintsType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
