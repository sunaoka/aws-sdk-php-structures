<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $Name
 * @property string $ReleaseNotes
 */
class UpdateRuntimeVersionRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     Name: string,
     *     ReleaseNotes: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
