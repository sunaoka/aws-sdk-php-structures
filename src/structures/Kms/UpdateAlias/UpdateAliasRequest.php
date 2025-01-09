<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 * @property string $TargetKeyId
 */
class UpdateAliasRequest extends Request
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
