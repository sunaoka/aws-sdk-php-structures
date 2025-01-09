<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListStandardsControlAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityControlId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListStandardsControlAssociationsRequest extends Request
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
