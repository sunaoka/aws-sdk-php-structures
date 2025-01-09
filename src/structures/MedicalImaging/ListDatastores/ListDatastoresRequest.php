<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListDatastores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED' $datastoreStatus
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDatastoresRequest extends Request
{
    /**
     * @param array{
     *     datastoreStatus?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
