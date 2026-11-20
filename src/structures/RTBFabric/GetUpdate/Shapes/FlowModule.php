<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $moduleVersionArn
 * @property list<'FILTER'|'ENRICH_REQUEST_EXT'|'ENRICH_REQUEST_HEADERS'|'OBSERVE'>|null $selectedActions
 * @property 'OPEN'|'CLOSED'|null $failureMode
 * @property float|null $activationPercentage
 * @property string|null $configurationValues
 */
class FlowModule extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     moduleVersionArn: string,
     *     selectedActions?: list<'FILTER'|'ENRICH_REQUEST_EXT'|'ENRICH_REQUEST_HEADERS'|'OBSERVE'>|null,
     *     failureMode?: 'OPEN'|'CLOSED'|null,
     *     activationPercentage?: float|null,
     *     configurationValues?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
