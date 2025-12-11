<?php

namespace Sunaoka\Aws\Structures\Connect\CreateDataTableAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property string $Name
 * @property 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST' $ValueType
 * @property string|null $Description
 * @property bool|null $Primary
 * @property Shapes\Validation|null $Validation
 */
class CreateDataTableAttributeRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     Name: string,
     *     ValueType: 'TEXT'|'NUMBER'|'BOOLEAN'|'TEXT_LIST'|'NUMBER_LIST',
     *     Description?: string|null,
     *     Primary?: bool|null,
     *     Validation?: Shapes\Validation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
