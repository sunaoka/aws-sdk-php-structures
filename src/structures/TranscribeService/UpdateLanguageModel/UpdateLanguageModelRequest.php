<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateLanguageModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property string|null $DataAccessRoleArn
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class UpdateLanguageModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     DataAccessRoleArn?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
