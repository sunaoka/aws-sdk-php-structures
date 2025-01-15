<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListStandardsControlAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityControlId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListStandardsControlAssociationsRequest extends Request
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
