<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string|null $clientToken
 * @property string|null $customerManagedKey
 * @property string|null $description
 * @property string|null $displayName
 * @property Shapes\InlineRedactionConfiguration|null $inlineRedactionConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     clientToken?: string|null,
     *     customerManagedKey?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     inlineRedactionConfiguration?: Shapes\InlineRedactionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
