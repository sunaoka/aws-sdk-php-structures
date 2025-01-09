<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $dataType
 * @property bool $isRequired
 * @property string $label
 * @property string $description
 * @property string $scope
 * @property list<string> $connectorSuppliedValueOptions
 */
class ConnectorRuntimeSetting extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     dataType?: string,
     *     isRequired?: bool,
     *     label?: string,
     *     description?: string,
     *     scope?: string,
     *     connectorSuppliedValueOptions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
