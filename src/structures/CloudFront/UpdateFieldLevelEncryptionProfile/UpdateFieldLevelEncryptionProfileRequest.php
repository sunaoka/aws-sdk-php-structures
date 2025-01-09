<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FieldLevelEncryptionProfileConfig $FieldLevelEncryptionProfileConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateFieldLevelEncryptionProfileRequest extends Request
{
    /**
     * @param array{
     *     FieldLevelEncryptionProfileConfig: Shapes\FieldLevelEncryptionProfileConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
