<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\Untag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string> $Keys
 */
class UntagRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Keys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
