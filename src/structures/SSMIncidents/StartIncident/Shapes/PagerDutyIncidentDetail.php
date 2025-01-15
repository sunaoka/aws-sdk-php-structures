<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $autoResolve
 * @property string $id
 * @property string|null $secretId
 */
class PagerDutyIncidentDetail extends Shape
{
    /**
     * @param array{
     *     autoResolve?: bool|null,
     *     id: string,
     *     secretId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
