<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCisSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StartCisSessionMessage $message
 * @property string $scanJobId
 */
class StartCisSessionRequest extends Request
{
    /**
     * @param array{
     *     message: Shapes\StartCisSessionMessage,
     *     scanJobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
