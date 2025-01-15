<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property double|null $BaseScore
 * @property string|null $BaseVector
 * @property string|null $Source
 * @property list<Adjustment>|null $Adjustments
 */
class Cvss extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     BaseScore?: double|null,
     *     BaseVector?: string|null,
     *     Source?: string|null,
     *     Adjustments?: list<Adjustment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
