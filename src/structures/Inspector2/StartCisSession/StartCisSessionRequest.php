<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCisSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanJobId
 * @property Shapes\StartCisSessionMessage $message
 */
class StartCisSessionRequest extends Request
{
    /**
     * @param array{
     *     scanJobId: string,
     *     message: Shapes\StartCisSessionMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
