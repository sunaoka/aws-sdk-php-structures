<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Description
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property array<string, Section>|null $Sections
 */
class SnapshotDetails extends Shape
{
    /**
     * @param array{
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Id?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Sections?: array<string, Section>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
