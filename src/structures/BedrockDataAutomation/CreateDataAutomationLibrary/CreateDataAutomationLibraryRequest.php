<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationLibrary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryName
 * @property string|null $libraryDescription
 * @property string|null $clientToken
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDataAutomationLibraryRequest extends Request
{
    /**
     * @param array{
     *     libraryName: string,
     *     libraryDescription?: string|null,
     *     clientToken?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
