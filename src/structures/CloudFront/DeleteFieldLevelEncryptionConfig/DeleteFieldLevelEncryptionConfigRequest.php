<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteFieldLevelEncryptionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $IfMatch
 */
class DeleteFieldLevelEncryptionConfigRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
