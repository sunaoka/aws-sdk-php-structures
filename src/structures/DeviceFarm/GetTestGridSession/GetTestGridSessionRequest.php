<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetTestGridSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $sessionId
 * @property string $sessionArn
 */
class GetTestGridSessionRequest extends Request
{
    /**
     * @param array{
     *     projectArn?: string,
     *     sessionId?: string,
     *     sessionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
