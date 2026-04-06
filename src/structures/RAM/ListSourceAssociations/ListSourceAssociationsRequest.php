<?php

namespace Sunaoka\Aws\Structures\RAM\ListSourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceShareArns
 * @property string|null $sourceId
 * @property string|null $sourceType
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|'SUSPENDED'|'SUSPENDING'|'RESTORING'|null $associationStatus
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class ListSourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArns?: list<string>|null,
     *     sourceId?: string|null,
     *     sourceType?: string|null,
     *     associationStatus?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|'SUSPENDED'|'SUSPENDING'|'RESTORING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
