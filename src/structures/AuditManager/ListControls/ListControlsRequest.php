<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Custom' $controlType
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListControlsRequest extends Request
{
    /**
     * @param array{
     *     controlType: 'Standard'|'Custom',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
