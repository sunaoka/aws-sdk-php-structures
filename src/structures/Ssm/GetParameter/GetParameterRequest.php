<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $WithDecryption
 */
class GetParameterRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WithDecryption?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
