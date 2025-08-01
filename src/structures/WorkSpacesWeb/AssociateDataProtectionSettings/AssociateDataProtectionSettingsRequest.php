<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateDataProtectionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $dataProtectionSettingsArn
 */
class AssociateDataProtectionSettingsRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     dataProtectionSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
