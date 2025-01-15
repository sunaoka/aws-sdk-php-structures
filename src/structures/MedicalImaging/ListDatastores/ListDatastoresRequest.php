<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDatastores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|null $datastoreStatus
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListDatastoresRequest extends Request
{
    /**
     * @param array{
     *     datastoreStatus?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
