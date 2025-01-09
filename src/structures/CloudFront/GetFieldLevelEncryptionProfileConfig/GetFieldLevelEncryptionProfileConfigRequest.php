<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfileConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetFieldLevelEncryptionProfileConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
