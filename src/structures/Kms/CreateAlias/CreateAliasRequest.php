<?php

namespace Sunaoka\Aws\Structures\Kms\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 * @property string $TargetKeyId
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     AliasName: string,
     *     TargetKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
