<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateFieldLevelEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FieldLevelEncryptionConfig $FieldLevelEncryptionConfig
 */
class CreateFieldLevelEncryptionConfigRequest extends Request
{
    /**
     * @param array{FieldLevelEncryptionConfig: Shapes\FieldLevelEncryptionConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
