<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeLabelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 */
class DescribeLabelGroupRequest extends Request
{
    /**
     * @param array{LabelGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
