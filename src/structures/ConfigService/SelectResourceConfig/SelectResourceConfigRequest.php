<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Expression
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class SelectResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     Expression: string,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
