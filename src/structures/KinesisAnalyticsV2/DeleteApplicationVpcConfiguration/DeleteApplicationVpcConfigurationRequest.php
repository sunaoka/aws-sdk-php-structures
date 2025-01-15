<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property int<1, 999999999>|null $CurrentApplicationVersionId
 * @property string $VpcConfigurationId
 * @property string|null $ConditionalToken
 */
class DeleteApplicationVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CurrentApplicationVersionId?: int<1, 999999999>|null,
     *     VpcConfigurationId: string,
     *     ConditionalToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
