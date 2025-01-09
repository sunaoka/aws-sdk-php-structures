<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListTemplateShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShareId
 * @property string $SharedWith
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class TemplateShareSummary extends Shape
{
    /**
     * @param array{
     *     ShareId?: string,
     *     SharedWith?: string,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
