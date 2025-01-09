<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property string $clientToken
 * @property string $customerManagedKey
 * @property string $description
 * @property string $displayName
 * @property Shapes\InlineRedactionConfiguration $inlineRedactionConfiguration
 * @property list<Shapes\Tag> $tags
 */
class CreateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     clientToken?: string,
     *     customerManagedKey?: string,
     *     description?: string,
     *     displayName?: string,
     *     inlineRedactionConfiguration?: Shapes\InlineRedactionConfiguration,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
