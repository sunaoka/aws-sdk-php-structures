<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Resources
 * @property int<60, 36500> $TieringDownSettingsInDays
 * @property string $ResourceType
 */
class ResourceSelection extends Shape
{
    /**
     * @param array{
     *     Resources: list<string>,
     *     TieringDownSettingsInDays: int<60, 36500>,
     *     ResourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
