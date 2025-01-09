<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $autoResolve
 * @property string $id
 * @property string $secretId
 */
class PagerDutyIncidentDetail extends Shape
{
    /**
     * @param array{
     *     autoResolve?: bool,
     *     id: string,
     *     secretId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
