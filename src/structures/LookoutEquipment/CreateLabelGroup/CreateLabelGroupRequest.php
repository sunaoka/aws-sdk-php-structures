<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateLabelGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupName
 * @property list<string>|null $FaultCodes
 * @property string $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateLabelGroupRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupName: string,
     *     FaultCodes?: list<string>|null,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
