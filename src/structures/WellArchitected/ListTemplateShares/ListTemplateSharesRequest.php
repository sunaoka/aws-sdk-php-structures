<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListTemplateShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $SharedWithPrefix
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 */
class ListTemplateSharesRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     SharedWithPrefix?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
