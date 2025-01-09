<?php

namespace Sunaoka\Aws\Structures\drs\TerminateRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionCode
 * @property string $actionId
 * @property string $actionVersion
 * @property bool $active
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER' $category
 * @property string $description
 * @property string $name
 * @property bool $optional
 * @property int<2, 10000> $order
 * @property array<string, LaunchActionParameter> $parameters
 * @property 'SSM_AUTOMATION'|'SSM_COMMAND' $type
 */
class LaunchAction extends Shape
{
    /**
     * @param array{
     *     actionCode?: string,
     *     actionId?: string,
     *     actionVersion?: string,
     *     active?: bool,
     *     category?: 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER',
     *     description?: string,
     *     name?: string,
     *     optional?: bool,
     *     order?: int<2, 10000>,
     *     parameters?: array<string, LaunchActionParameter>,
     *     type?: 'SSM_AUTOMATION'|'SSM_COMMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
