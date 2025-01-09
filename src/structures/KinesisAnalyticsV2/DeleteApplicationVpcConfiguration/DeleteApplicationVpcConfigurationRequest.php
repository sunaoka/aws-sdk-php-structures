<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 * @property string $VpcConfigurationId
 * @property string $ConditionalToken
 */
class DeleteApplicationVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>,
     *     VpcConfigurationId: string,
     *     ConditionalToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
