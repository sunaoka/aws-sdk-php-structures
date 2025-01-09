<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $indexId
 * @property string $dataSourceId
 */
class EligibleDataSource extends Shape
{
    /**
     * @param array{
     *     indexId?: string,
     *     dataSourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
