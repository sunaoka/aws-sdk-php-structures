<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateLabelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property list<string>|null $FaultCodes
 */
class UpdateLabelGroupRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     FaultCodes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
