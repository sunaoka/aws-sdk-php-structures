<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackId
 * @property list<string>|null $LayerIds
 */
class DescribeLayersRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     LayerIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
