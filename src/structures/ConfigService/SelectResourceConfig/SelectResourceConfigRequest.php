<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Expression
 * @property int $Limit
 * @property string $NextToken
 */
class SelectResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     Expression: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
