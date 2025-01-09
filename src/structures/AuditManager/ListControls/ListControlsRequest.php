<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Custom'|'Core' $controlType
 * @property string $nextToken
 * @property int $maxResults
 * @property string $controlCatalogId
 */
class ListControlsRequest extends Request
{
    /**
     * @param array{
     *     controlType: 'Standard'|'Custom'|'Core',
     *     nextToken?: string,
     *     maxResults?: int,
     *     controlCatalogId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
