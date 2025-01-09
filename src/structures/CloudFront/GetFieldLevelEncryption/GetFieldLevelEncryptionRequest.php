<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetFieldLevelEncryptionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
