<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDlpSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DlpSettingId
 * @property string $Name
 * @property string $Arn
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property 'MICROSOFT_PURVIEW' $ProviderType
 * @property ProviderConfig $ProviderConfig
 * @property 'ALLOW'|'WARN'|'BLOCK' $ProviderOutageAction
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class DlpSettingDetails extends Shape
{
    /**
     * @param array{
     *     DlpSettingId: string,
     *     Name: string,
     *     Arn: string,
     *     Status: 'ACTIVE'|'INACTIVE',
     *     ProviderType: 'MICROSOFT_PURVIEW',
     *     ProviderConfig: ProviderConfig,
     *     ProviderOutageAction: 'ALLOW'|'WARN'|'BLOCK',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
