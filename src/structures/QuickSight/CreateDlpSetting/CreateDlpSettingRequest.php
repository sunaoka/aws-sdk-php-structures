<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDlpSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DlpSettingId
 * @property string $Name
 * @property 'MICROSOFT_PURVIEW' $ProviderType
 * @property Shapes\ProviderConfig $ProviderConfig
 * @property 'ALLOW'|'WARN'|'BLOCK' $ProviderOutageAction
 * @property bool $Enabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDlpSettingRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DlpSettingId: string,
     *     Name: string,
     *     ProviderType: 'MICROSOFT_PURVIEW',
     *     ProviderConfig: Shapes\ProviderConfig,
     *     ProviderOutageAction: 'ALLOW'|'WARN'|'BLOCK',
     *     Enabled: bool,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
