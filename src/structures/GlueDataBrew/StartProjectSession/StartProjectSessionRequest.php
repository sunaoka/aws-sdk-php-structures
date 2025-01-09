<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\StartProjectSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $AssumeControl
 */
class StartProjectSessionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AssumeControl?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
