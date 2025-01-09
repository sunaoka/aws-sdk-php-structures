<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DatastoreFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListFHIRDatastoresRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DatastoreFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
