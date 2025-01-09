<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateLabelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property list<string> $FaultCodes
 */
class UpdateLabelGroupRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     FaultCodes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
