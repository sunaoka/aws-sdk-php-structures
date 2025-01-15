<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyHapg;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HapgArn
 * @property string|null $Label
 * @property list<string>|null $PartitionSerialList
 */
class ModifyHapgRequest extends Request
{
    /**
     * @param array{
     *     HapgArn: string,
     *     Label?: string|null,
     *     PartitionSerialList?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
