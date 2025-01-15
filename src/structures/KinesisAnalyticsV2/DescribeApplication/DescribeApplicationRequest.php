<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property bool|null $IncludeAdditionalDetails
 */
class DescribeApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     IncludeAdditionalDetails?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
