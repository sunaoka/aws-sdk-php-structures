<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShareId
 * @property string|null $SharedWith
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class ProfileShareSummary extends Shape
{
    /**
     * @param array{
     *     ShareId?: string|null,
     *     SharedWith?: string|null,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
