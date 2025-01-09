<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyHapg;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HapgArn
 * @property string $Label
 * @property list<string> $PartitionSerialList
 */
class ModifyHapgRequest extends Request
{
    /**
     * @param array{
     *     HapgArn: string,
     *     Label?: string,
     *     PartitionSerialList?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
