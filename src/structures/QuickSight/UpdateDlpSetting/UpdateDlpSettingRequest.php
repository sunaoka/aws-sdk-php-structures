<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDlpSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DlpSettingId
 * @property string|null $Name
 * @property 'MICROSOFT_PURVIEW'|null $ProviderType
 * @property Shapes\ProviderConfig|null $ProviderConfig
 * @property 'ALLOW'|'WARN'|'BLOCK'|null $ProviderOutageAction
 * @property bool|null $Enabled
 */
class UpdateDlpSettingRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DlpSettingId: string,
     *     Name?: string|null,
     *     ProviderType?: 'MICROSOFT_PURVIEW'|null,
     *     ProviderConfig?: Shapes\ProviderConfig|null,
     *     ProviderOutageAction?: 'ALLOW'|'WARN'|'BLOCK'|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
