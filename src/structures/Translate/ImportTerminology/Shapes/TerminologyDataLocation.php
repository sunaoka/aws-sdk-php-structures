<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryType
 * @property string $Location
 */
class TerminologyDataLocation extends Shape
{
    /**
     * @param array{
     *     RepositoryType: string,
     *     Location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
