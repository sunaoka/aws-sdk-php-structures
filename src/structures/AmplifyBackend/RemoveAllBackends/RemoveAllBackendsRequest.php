<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\RemoveAllBackends;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property bool|null $CleanAmplifyApp
 */
class RemoveAllBackendsRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     CleanAmplifyApp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
