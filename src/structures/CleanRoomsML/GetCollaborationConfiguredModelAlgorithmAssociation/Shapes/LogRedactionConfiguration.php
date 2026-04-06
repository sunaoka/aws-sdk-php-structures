<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ALL_PERSONALLY_IDENTIFIABLE_INFORMATION'|'NUMBERS'|'CUSTOM'> $entitiesToRedact
 * @property CustomEntityConfig|null $customEntityConfig
 */
class LogRedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     entitiesToRedact: list<'ALL_PERSONALLY_IDENTIFIABLE_INFORMATION'|'NUMBERS'|'CUSTOM'>,
     *     customEntityConfig?: CustomEntityConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
