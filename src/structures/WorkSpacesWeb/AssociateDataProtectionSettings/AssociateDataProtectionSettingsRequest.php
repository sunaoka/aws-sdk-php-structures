<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataProtectionSettingsArn
 * @property string $portalArn
 */
class AssociateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     dataProtectionSettingsArn: string,
     *     portalArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
