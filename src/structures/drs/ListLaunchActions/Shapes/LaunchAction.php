<?php

namespace Sunaoka\Aws\Structures\drs\ListLaunchActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionId
 * @property string|null $actionCode
 * @property 'SSM_AUTOMATION'|'SSM_COMMAND'|null $type
 * @property string|null $name
 * @property bool|null $active
 * @property int<2, 10000>|null $order
 * @property string|null $actionVersion
 * @property bool|null $optional
 * @property array<string, LaunchActionParameter>|null $parameters
 * @property string|null $description
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER'|null $category
 */
class LaunchAction extends Shape
{
    /**
     * @param array{
     *     actionId?: string|null,
     *     actionCode?: string|null,
     *     type?: 'SSM_AUTOMATION'|'SSM_COMMAND'|null,
     *     name?: string|null,
     *     active?: bool|null,
     *     order?: int<2, 10000>|null,
     *     actionVersion?: string|null,
     *     optional?: bool|null,
     *     parameters?: array<string, LaunchActionParameter>|null,
     *     description?: string|null,
     *     category?: 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
