<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TokenId
 */
class DeleteTokenRequest extends Request
{
    /**
     * @param array{TokenId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
