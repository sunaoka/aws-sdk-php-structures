<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DatastoreFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListFHIRDatastoresRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DatastoreFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
