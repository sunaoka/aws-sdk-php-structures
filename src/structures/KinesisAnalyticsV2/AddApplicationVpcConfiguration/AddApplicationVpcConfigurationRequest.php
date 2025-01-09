<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999> $CurrentApplicationVersionId
 * @property Shapes\VpcConfiguration $VpcConfiguration
 * @property string $ConditionalToken
 */
class AddApplicationVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>,
     *     VpcConfiguration: Shapes\VpcConfiguration,
     *     ConditionalToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
