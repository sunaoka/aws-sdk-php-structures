<?php

namespace Sunaoka\Aws\Structures\Rds\StopActivityStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property bool $ApplyImmediately
 */
class StopActivityStreamRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ApplyImmediately?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
