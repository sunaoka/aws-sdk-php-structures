<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFieldLevelEncryptionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FieldLevelEncryptionProfileConfig $FieldLevelEncryptionProfileConfig
 */
class CreateFieldLevelEncryptionProfileRequest extends Request
{
    /**
     * @param array{FieldLevelEncryptionProfileConfig: Shapes\FieldLevelEncryptionProfileConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
