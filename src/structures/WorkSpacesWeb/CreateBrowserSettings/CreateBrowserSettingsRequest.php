<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string|null $browserPolicy
 * @property string|null $clientToken
 * @property Shapes\WebContentFilteringPolicy|null $webContentFilteringPolicy
 */
class CreateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     tags?: list<Shapes\Tag>|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     browserPolicy?: string|null,
     *     clientToken?: string|null,
     *     webContentFilteringPolicy?: Shapes\WebContentFilteringPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
