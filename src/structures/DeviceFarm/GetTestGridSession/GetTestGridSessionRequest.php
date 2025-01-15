<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetTestGridSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $projectArn
 * @property string|null $sessionId
 * @property string|null $sessionArn
 */
class GetTestGridSessionRequest extends Request
{
    /**
     * @param array{
     *     projectArn?: string|null,
     *     sessionId?: string|null,
     *     sessionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
