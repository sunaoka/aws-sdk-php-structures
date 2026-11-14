<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntimeVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string $Name
 */
class GetRuntimeVersionRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
