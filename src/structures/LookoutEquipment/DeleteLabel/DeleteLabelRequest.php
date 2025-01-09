<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property string $LabelId
 */
class DeleteLabelRequest extends Request
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
