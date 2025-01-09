<?php

namespace Sunaoka\Aws\Structures\Backup\GetLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $VaultNames
 * @property list<string> $ResourceIdentifiers
 * @property DateRange $DateRange
 */
class RecoveryPointSelection extends Shape
{
    /**
     * @param array{
     *     VaultNames?: list<string>,
     *     ResourceIdentifiers?: list<string>,
     *     DateRange?: DateRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
