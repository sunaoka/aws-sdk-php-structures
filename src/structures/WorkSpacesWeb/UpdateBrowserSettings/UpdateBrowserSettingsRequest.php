<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $browserPolicy
 * @property string $browserSettingsArn
 * @property string|null $clientToken
 */
class UpdateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     browserPolicy?: string|null,
     *     browserSettingsArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
