<?php

namespace Sunaoka\Aws\Structures\SesV2\ListReputationEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'ENTITY_TYPE'|'REPUTATION_IMPACT'|'SENDING_STATUS'|'ENTITY_REFERENCE_PREFIX', string>|null $Filter
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListReputationEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Filter?: array<'ENTITY_TYPE'|'REPUTATION_IMPACT'|'SENDING_STATUS'|'ENTITY_REFERENCE_PREFIX', string>|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
