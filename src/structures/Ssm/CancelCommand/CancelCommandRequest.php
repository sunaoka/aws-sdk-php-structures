<?php

namespace Sunaoka\Aws\Structures\Ssm\CancelCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CommandId
 * @property list<string> $InstanceIds
 */
class CancelCommandRequest extends Request
{
    /**
     * @param array{
     *     CommandId: string,
     *     InstanceIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
