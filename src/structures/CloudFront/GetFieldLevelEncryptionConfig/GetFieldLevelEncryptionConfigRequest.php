<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetFieldLevelEncryptionConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
