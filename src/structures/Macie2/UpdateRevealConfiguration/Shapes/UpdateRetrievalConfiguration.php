<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateRevealConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CALLER_CREDENTIALS'|'ASSUME_ROLE' $retrievalMode
 * @property string $roleName
 */
class UpdateRetrievalConfiguration extends Shape
{
    /**
     * @param array{
     *     retrievalMode: 'CALLER_CREDENTIALS'|'ASSUME_ROLE',
     *     roleName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
