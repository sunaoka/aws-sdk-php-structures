<?php

namespace Sunaoka\Aws\Structures\GameSparks\ImportGameConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property array<string, Section>|null $Sections
 */
class GameConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Sections?: array<string, Section>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
