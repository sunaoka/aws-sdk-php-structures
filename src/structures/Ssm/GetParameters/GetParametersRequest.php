<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property bool|null $WithDecryption
 */
class GetParametersRequest extends Request
{
    /**
     * @param array{
     *     Names: list<string>,
     *     WithDecryption?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
