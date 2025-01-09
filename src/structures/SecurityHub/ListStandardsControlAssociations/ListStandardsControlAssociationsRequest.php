<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListStandardsControlAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityControlId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListStandardsControlAssociationsRequest extends Request
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
