<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property list<Change> $Changes
 */
class ChangeBatch extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     Changes: list<Change>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
