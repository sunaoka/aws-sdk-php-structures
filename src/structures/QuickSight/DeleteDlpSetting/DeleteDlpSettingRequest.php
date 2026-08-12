<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteDlpSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DlpSettingId
 */
class DeleteDlpSettingRequest extends Request
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
