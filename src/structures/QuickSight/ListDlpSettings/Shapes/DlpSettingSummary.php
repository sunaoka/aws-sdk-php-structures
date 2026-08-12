<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDlpSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DlpSettingId
 * @property string $Name
 * @property string $Arn
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property 'MICROSOFT_PURVIEW' $ProviderType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class DlpSettingSummary extends Shape
{
    /**
     * @param array{
     *     DlpSettingId: string,
     *     Name: string,
     *     Arn: string,
     *     Status: 'ACTIVE'|'INACTIVE',
     *     ProviderType: 'MICROSOFT_PURVIEW',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
