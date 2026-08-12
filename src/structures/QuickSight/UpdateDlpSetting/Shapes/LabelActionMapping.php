<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDlpSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelId
 * @property string $LabelName
 * @property 'ALLOW'|'WARN'|'BLOCK' $Action
 */
class LabelActionMapping extends Shape
{
    /**
     * @param array{
     *     LabelId: string,
     *     LabelName: string,
     *     Action: 'ALLOW'|'WARN'|'BLOCK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
