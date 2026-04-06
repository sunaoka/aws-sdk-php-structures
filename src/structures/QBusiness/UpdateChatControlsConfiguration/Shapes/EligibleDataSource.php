<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $indexId
 * @property string|null $dataSourceId
 */
class EligibleDataSource extends Shape
{
    /**
     * @param array{
     *     indexId?: string|null,
     *     dataSourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
