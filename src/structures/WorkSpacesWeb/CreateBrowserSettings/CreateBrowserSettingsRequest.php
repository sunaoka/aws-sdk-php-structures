<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property string $browserPolicy
 * @property string $clientToken
 * @property string $customerManagedKey
 * @property list<Shapes\Tag> $tags
 */
class CreateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     browserPolicy: string,
     *     clientToken?: string,
     *     customerManagedKey?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
