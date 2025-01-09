<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property list<string> $LayerIds
 */
class DescribeLayersRequest extends Request
{
    /**
     * @param array{
     *     StackId?: string,
     *     LayerIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
