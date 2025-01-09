<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteWorkGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property bool $RecursiveDeleteOption
 */
class DeleteWorkGroupRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     RecursiveDeleteOption?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
