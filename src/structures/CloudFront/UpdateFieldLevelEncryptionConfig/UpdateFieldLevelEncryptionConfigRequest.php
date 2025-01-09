<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FieldLevelEncryptionConfig $FieldLevelEncryptionConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateFieldLevelEncryptionConfigRequest extends Request
{
    /**
     * @param array{
     *     FieldLevelEncryptionConfig: Shapes\FieldLevelEncryptionConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
