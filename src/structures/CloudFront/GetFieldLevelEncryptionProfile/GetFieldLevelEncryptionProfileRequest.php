<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetFieldLevelEncryptionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetFieldLevelEncryptionProfileRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
