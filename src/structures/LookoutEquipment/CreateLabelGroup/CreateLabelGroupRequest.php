<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateLabelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property list<string> $FaultCodes
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateLabelGroupRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     FaultCodes?: list<string>,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
