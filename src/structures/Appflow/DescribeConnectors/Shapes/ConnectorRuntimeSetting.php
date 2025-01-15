<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $dataType
 * @property bool|null $isRequired
 * @property string|null $label
 * @property string|null $description
 * @property string|null $scope
 * @property list<string>|null $connectorSuppliedValueOptions
 */
class ConnectorRuntimeSetting extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     dataType?: string|null,
     *     isRequired?: bool|null,
     *     label?: string|null,
     *     description?: string|null,
     *     scope?: string|null,
     *     connectorSuppliedValueOptions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
