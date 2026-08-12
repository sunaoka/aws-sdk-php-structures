<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDlpSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DlpSettingId
 */
class DescribeDlpSettingRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DlpSettingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
