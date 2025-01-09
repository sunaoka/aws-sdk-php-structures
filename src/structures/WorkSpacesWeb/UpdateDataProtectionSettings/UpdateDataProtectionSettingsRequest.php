<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $dataProtectionSettingsArn
 * @property string $description
 * @property string $displayName
 * @property Shapes\InlineRedactionConfiguration $inlineRedactionConfiguration
 */
class UpdateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     dataProtectionSettingsArn: string,
     *     description?: string,
     *     displayName?: string,
     *     inlineRedactionConfiguration?: Shapes\InlineRedactionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
