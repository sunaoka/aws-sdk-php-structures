<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionCode
 * @property string|null $actionId
 * @property string|null $actionVersion
 * @property bool|null $active
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER'|null $category
 * @property string|null $description
 * @property string|null $name
 * @property bool|null $optional
 * @property int<2, 10000>|null $order
 * @property array<string, LaunchActionParameter>|null $parameters
 * @property 'SSM_AUTOMATION'|'SSM_COMMAND'|null $type
 */
class LaunchAction extends Shape
{
    /**
     * @param array{
     *     actionCode?: string|null,
     *     actionId?: string|null,
     *     actionVersion?: string|null,
     *     active?: bool|null,
     *     category?: 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER'|null,
     *     description?: string|null,
     *     name?: string|null,
     *     optional?: bool|null,
     *     order?: int<2, 10000>|null,
     *     parameters?: array<string, LaunchActionParameter>|null,
     *     type?: 'SSM_AUTOMATION'|'SSM_COMMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
