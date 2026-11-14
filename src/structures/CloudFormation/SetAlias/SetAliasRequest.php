<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $AliasName
 */
class SetAliasRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     AliasName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
