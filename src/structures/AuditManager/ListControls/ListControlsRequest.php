<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Custom'|'Core' $controlType
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property string|null $controlCatalogId
 */
class ListControlsRequest extends Request
{
    /**
     * @param array{
     *     controlType: 'Standard'|'Custom'|'Core',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     controlCatalogId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
