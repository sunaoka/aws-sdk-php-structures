<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $displayName
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property Shapes\InlineRedactionConfiguration|null $inlineRedactionConfiguration
 * @property string|null $clientToken
 */
class CreateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     inlineRedactionConfiguration?: Shapes\InlineRedactionConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
