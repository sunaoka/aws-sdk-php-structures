<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\ControlMappingFilter|null $Filter
 */
class ListControlMappingsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filter?: Shapes\ControlMappingFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
