<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateRevealConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $externalId
 * @property 'CALLER_CREDENTIALS'|'ASSUME_ROLE' $retrievalMode
 * @property string|null $roleName
 */
class RetrievalConfiguration extends Shape
{
    /**
     * @param array{
     *     externalId?: string|null,
     *     retrievalMode: 'CALLER_CREDENTIALS'|'ASSUME_ROLE',
     *     roleName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
