<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteLabelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 */
class DeleteLabelGroupRequest extends Request
{
    /**
     * @param array{LabelGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
