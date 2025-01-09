<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property string $LabelId
 */
class DescribeLabelRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     LabelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
