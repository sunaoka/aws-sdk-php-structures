<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $browserSettingsArn
 * @property string|null $browserPolicy
 * @property string|null $clientToken
 */
class UpdateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     browserSettingsArn: string,
     *     browserPolicy?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
