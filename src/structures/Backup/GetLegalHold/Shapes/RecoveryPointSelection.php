<?php

namespace Sunaoka\Aws\Structures\Backup\GetLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $VaultNames
 * @property list<string>|null $ResourceIdentifiers
 * @property DateRange|null $DateRange
 */
class RecoveryPointSelection extends Shape
{
    /**
     * @param array{
     *     VaultNames?: list<string>|null,
     *     ResourceIdentifiers?: list<string>|null,
     *     DateRange?: DateRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
