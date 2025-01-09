<?php

namespace Sunaoka\Aws\Structures\Macie2\GetRevealConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $externalId
 * @property 'CALLER_CREDENTIALS'|'ASSUME_ROLE' $retrievalMode
 * @property string $roleName
 */
class RetrievalConfiguration extends Shape
{
    /**
     * @param array{
     *     externalId?: string,
     *     retrievalMode: 'CALLER_CREDENTIALS'|'ASSUME_ROLE',
     *     roleName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
