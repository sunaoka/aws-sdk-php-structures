<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFieldLevelEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FieldLevelEncryptionConfig $FieldLevelEncryptionConfig
 * @property string $Id
 * @property string|null $IfMatch
 */
class UpdateFieldLevelEncryptionConfigRequest extends Request
{
    /**
     * @param array{
     *     FieldLevelEncryptionConfig: Shapes\FieldLevelEncryptionConfig,
     *     Id: string,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
