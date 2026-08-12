<?php

namespace Sunaoka\Aws\Structures\Iam\GetRoleTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'String'|'StringList'|'Number'|'NumberList'|'Arn'|'ArnList' $Type
 * @property string|null $SubType
 * @property string|null $Description
 * @property bool|null $IsRequired
 * @property string|null $DefaultValue
 * @property bool|null $Immutable
 */
class ParameterDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'String'|'StringList'|'Number'|'NumberList'|'Arn'|'ArnList',
     *     SubType?: string|null,
     *     Description?: string|null,
     *     IsRequired?: bool|null,
     *     DefaultValue?: string|null,
     *     Immutable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
