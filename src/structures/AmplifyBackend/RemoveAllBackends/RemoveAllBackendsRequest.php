<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\RemoveAllBackends;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property bool $CleanAmplifyApp
 */
class RemoveAllBackendsRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     CleanAmplifyApp?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
